@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h4>자유게시판<small>/ {{$post->title}}</small></h4>
    </div>
    @include('posts.partial.post', compact('post'))
    <p>
        {{$post->content}}
    </p>


    <div class="text-center action__article">
        @can('update', $post)
            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-info">
                <i class="fa fa-pencil"></i>
                글 수정
            </a>
        @endcan
        @can('destroy', $post)
            <a href="{{ route('posts.destroy', $post->id)}}" class="btn btn-danger">
                <i class="fa fa-trash-o"></i>
                글 삭제
            </a>
        @endcan
        <a href="{{ route('posts.index') }}" class="btn btn-default">
            <i class="fa fa-list"></i>
            글 목록
        </a>
    </div>

    <div class="container__comment">
        @include('comments.index')
    </div>
@endsection