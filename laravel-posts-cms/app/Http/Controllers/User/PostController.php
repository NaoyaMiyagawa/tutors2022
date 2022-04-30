<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * 一覧画面
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::publicList();

        return view('user.posts.index', compact('posts'));
    }

    /**
     * 詳細画面
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show(int $id)
    {
        $post = Post::publicFindById($id);

        return view('user.posts.show', compact('post'));
    }
}
