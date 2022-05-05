<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    /**
     * Post list page
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Create post page
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store POST
     * @param  PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        if ($post) {
            return redirect()
                ->route('admin.posts.edit', $post)
                ->withSuccess('データを登録しました。');
        } else {
            return redirect()
                ->route('admin.posts.create')
                ->withError('データの登録に失敗しました。');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if ($post->update($request->all())) {
            $flash = ['success' => 'データを更新しました。'];
        } else {
            $flash = ['error' => 'データの更新に失敗しました'];
        }

        return redirect()
            ->route('admin.posts.edit', $post)
            ->with($flash);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
