<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    /**
     * Post list page
     * @return \Illuminate\Contracts\View\View
     */
    public function index($tagSlug = null)
    {
        $posts = Post::publicList($tagSlug);
        $tags = Tag::all();
        return view('admin.posts.index', compact('posts', 'tags'));
    }

    /**
     * Create post page
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $tags = Tag::pluck('name', 'id')->toArray();
        return view('admin.posts.create', compact('tags'));
    }

    /**
     * Store POST
     * @param  PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        $post->tags()->attach($request->tags);

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
        $tags = Tag::pluck('name', 'id')->toArray();
        return view('admin.posts.edit', compact('post', 'tags'));
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
        $post->tags()->sync($request->tags);

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
    public function destroy(Post $post)
    {
        $post->tags()->detach();

        if ($post->delete()) {
            $flash = ['success' => 'データを削除しました。'];
        } else {
            $flash = ['error' => 'データの削除に失敗しました'];
        }

        return redirect()
            ->route('admin.posts.index')
            ->with($flash);
    }
}
