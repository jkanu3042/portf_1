<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(!auth()->attempt($request->only('email', 'password'),
            $request->has('remember'))){
            flash('이메일 또는 비밀번호가 맞지 않습니다.');

            return back()->withInput();
        }

        flash(auth()->user()->name. '님이 로그인 되었습니다.');

        return redirect()->intended('/posts');

    }

    public function destroy()
    {
        auth()->logout();
        flash('로그아웃 되었습니다.');

        return redirect('posts');
    }


}
