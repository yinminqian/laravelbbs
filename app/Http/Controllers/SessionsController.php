<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
//        链接视图文件
    }


    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials,$request->has('remember'))) {
//            数据库验证数据成功以后的操作
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
//            数据库验证数据失败的时候的操作
            session()->flash('danger', '很抱歉,您的账户和密码不匹配');
            return redirect()->back();
        }
        return;
    }


    public function destroy()
    {
        Auth::logout();
//        登出
        session()->flash('success', '您已经成功退出');
        return redirect('login');
//        重定向到登录页面
    }
}
