@extends('layouts.app')

@section('content')
    <div class='container'>
        <h1>새 포럼글 쓰기</h1>
        <hr/>
        <form action="{{ route('posts.store') }}" method="Post" enctype="multipart/form-data" class="form__article">
            {!! csrf_field() !!}

            @include('posts.partial.form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    저장하기
                </button>
            </div>
        </form>
    </div>
@endsection