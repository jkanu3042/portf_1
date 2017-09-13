@extends('layouts.app')

@section('content')

    <img class="ui image" src="/img/dog.jpg" style="width:400px;height:300px;">

    <div class="ui piled segment">
        <h4 class="ui header">안녕하세요! 이 웹은 테스트용 입니다.</h4>
        <p><i class="fa fa-circle"></i> 이 웹은 라라벨 프레임워크로 제작되었습니다.</p>
        <p><i class="fa fa-circle"></i> 로그인, 회원가입, CRUD 게시판, 댓글 작성, 삭제 등의 기본적인 기능을 제공합니다.</p>
        <p><i class="fa fa-circle"></i> Socialite Component를 이용하여 github, facebook 연동 로그인이 가능합니다.</p>
        <p><i class="fa fa-child"></i> 제작자 : 전종훈</p>
        <p><i class="fa fa-envelope"></i>  jkanu3042@naver.com</p>
    </div>
@endsection