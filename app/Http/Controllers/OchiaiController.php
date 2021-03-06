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
            //$data = DB::select('select * from users where id = :id',['id' => $request->id]);
            //firstだと単一のオブジェクトが取れる/getだと配列の中にオブジェクトが入る
            //$data = DB::table('users')->where('id', $request->id)->first();
            //$data = DB::table('users')->where('id', $request->id)->get();
            //ある程度複雑なクエリはwhereRaw
            $data = DB::table('users')->whereRaw('id <> ? ', $request->id)->orderBy('id', 'desc')->get();
        } else {
            //$data = DB::select('select * from users');
            $data = DB::table('users')->get();
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
            if (isset($request->id) ){
                return redirect('/ochiai/edit?id='. $request->id)
                ->withErrors($validator)
                ->withInput();
            } else {
                return redirect('/ochiai/add')
                ->withErrors($validator)
                ->withInput();
            }
        }

        $params =[
            'name' => $request->name,
            'email' => $request->email,
            'short_name' => 'aaa',
            'password' => 'bbb',
            'email' => $request->email,
            'email2' => $request->email
        ];

        if ($request->id) {
            DB::table('users')->where('id', $request->id)->update($params);
            //$params['id'] = $request->id;
            //DB::update('update users set name =:name, short_name =:short_name, password =:password,email =:email,email2 =:email2 where id =:id ', $params);
        } else {
            DB::table('users')->insert($params);
            //DB::insert('insert into users (name, short_name,password,email,email2) values (:name,:short_name,:password,:email,:email2) ', $params);
        }
        return redirect('/ochiai/complete');


    }

    public function complete() {
        return view('hoge.ochiai_complete');
    }

    public function edit(Request $request) {
        $data = DB::select('select * from users where id = :id',['id' => $request->id]);
        return view('hoge.ochiai_edit', ['data'=>$data[0]]);
    }

}
