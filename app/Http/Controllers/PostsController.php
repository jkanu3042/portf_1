<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
        $posts = \App\Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $post = new \App\Post;
        return view('posts.create', compact('post'));
    }


    public function store(\App\Http\Requests\PostsRequest $request)
    {
        $post = $request->user()->posts()->create($request->all());

        if (! $post) {
            flash()->message('오류가 발생했습니다. 글을 작성하지 못했습니다.');
            return back()->withInput();
        }

        flash()->success('작성하신 글이 저장되었습니다.');

        return redirect(route('posts.index'));

    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(\App\Post $post)
    {

        return view('posts.edit', compact('post'));
    }


    public function update(\App\Http\Requests\PostsRequest $request, \App\Post $post)
    {
        $this->authorize('update', $post);
        $post->update($request->all());
        flash()->success('수정 되었습니다.');

        return redirect(route('posts.show', $post->id));
    }

    public function destroy(\App\Post $post)
    {
        $this->authorize('destroy', $post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
