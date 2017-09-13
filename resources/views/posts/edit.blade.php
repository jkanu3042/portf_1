@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h4>자유게시판<small>/ 글 수정 / {{$post->title}}</small></h4>
    </div>

    <form action="{{route('posts.update', $post->id) }}" method="POST">
        {!! csrf_token() !!}
        {!! method_field('PUT') !!}

        @include('posts.partial.form')

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">
                수정하기
            </button>
        </div>
    </form>
@endsection

