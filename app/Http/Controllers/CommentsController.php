<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\Http\Requests\CommentsRequest $request, \App\Post $post)
    {
        $comment = $post->comments()->create(array_merge(
            $request->all(),
            ['user_id' => $request->user()->id]
        ));

        flash()->success('작성하신 댓글을 저장했습니다.');

        return redirect(
            route('posts.show', $post->id) . '#comment_' . $comment->id
        );
    }


    public function destroy(\App\Comment $comment)
    {
        $comment->delete();

        return redirect(route('posts.show', $comment->commentable->id));
    }

}
