<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * 一覧画面
     * @return \Illuminate\Contracts\View\View
     */
    public function index($tagSlug = null)
    {
        $posts = Post::publicList($tagSlug);
        $tags = Tag::all();

        return view('user.posts.index', compact('posts', 'tags'));
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
