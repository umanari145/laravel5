<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class KuwataController extends Controller
{

    public function index()
    {
        return view('hoge.kuwata',['msg' => 'フォームを入力してください。']);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mail' => 'email',
            'age'   => 'numeric|between:0,150',
        ],[
            'name.required' => '名前が未入力です。',
            'mail.email' => 'メールアドレスを正確に入力してください。',
            'age.numeric' => '年齢は数字で!',
            'age.between' => '年齢は0～150の間で'
        ]);

        if ($validator->fails()) {
            //今回は同じだがリダイレクト先を任意に指定できる
            return redirect('/kuwata')
                ->withErrors($validator)
                ->withInput();
        }

        return view('hoge.kuwata',['msg' => '正しく入力されました']);

    }
}
