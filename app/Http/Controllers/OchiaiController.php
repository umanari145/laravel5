<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class OchiaiController extends Controller
{
    public function index(Request $request) {

        $data = null;
        if (isset($request->id)) {
            $data = DB::select('select * from users where id = :id',
                ['id' => $request->id]);
        } else {
            $data = DB::select('select * from users');
        }
        return view('hoge.ochiai',['data' => $data]);
    }

    public function add() {
        return view('hoge.ochiai_add');
    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'email'
        ],[
            'name.required' => '名前が未入力です。',
            'email.email' => 'メールアドレスを正確に入力してください。',
        ]);

        if ($validator->fails()) {
            //今回は同じだがリダイレクト先を任意に指定できる
            return redirect('/ochiai/add')
            ->withErrors($validator)
            ->withInput();
        }

        $params =[
            'name' => $request->name,
            'email' => $request->email,
            'short_name' => 'aaa',
            'password' => 'bbb',
            'email' => $request->email,
            'email2' => $request->email
        ];

        DB::insert('insert into users (name, short_name,password,email,email2) values (:name,:short_name,:password,:email,:email2) ', $params);

        return redirect('/ochiai/complete');


    }

    public function complete() {
        return view('hoge.ochiai_complete');
    }

}
