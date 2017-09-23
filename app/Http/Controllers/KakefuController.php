<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KakefuController extends Controller
{
    public function index()
    {
        return view('hoge.kakefu',['msg' => 'フォームを入力してください。']);
    }

    public function post(Request $request)
    {
        $validate_rule =[
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];

        $this->validate($request, $validate_rule);

        return view('hoge.kakefu',['msg' => '正しく入力されました。']);
    }

}
