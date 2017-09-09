@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @forelse($posts as $post)
            <li class="list-group-item">
                <a href="{{route('posts.show', $post->id)}}">{{$post->content}}</a>
                <small>by {{$post->user->name}}</small>
            </li>
        @empty
            <p>작성된 포스트가 하나도 없습니다.</p>
        @endforelse
    </ul>

    @if($posts->count())
        <div class="text-center">
            {{ $posts->links('vendor.pagination.default') }}
        </div>
    @endif

@endsection
