@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h4>자유게시판<small>/ 목록</small></h4>
    </div>


    <div class="col-lg-12">
        <div class="text-right">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                <i class="fa fa-plus-circle"></i>새 글 작성
            </a>
        </div>
        <article>
            @forelse($posts as $post)
                <div class="media">
                    @include('posts.partial.post', compact('post'))
                </div>
            @empty
                <p>작성된 포스트가 하나도 없습니다.</p>
            @endforelse
        </article>

        <br>
    </div>

    @if($posts->count())
        <div class="text-center">
            {{ $posts->links('vendor.pagination.default') }}
        </div>
    @endif



@endsection
