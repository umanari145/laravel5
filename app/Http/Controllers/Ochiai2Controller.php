<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Person;

class Ochiai2Controller extends Controller
{
    public function index(Request $request) {
        $data = null;
        if (isset($request->name)) {
            //primarykeyで取得する工夫は下記の通り
            //$data = Person::find($request->id);

            //1件のときはfirst
            //$data = Person::where('name', $request->name)->first();

            $data = Person::where('name', $request->name)->get();

        } else {
            $data = Person::all();
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
            $params['id'] = $request->id;
            DB::insert('update users set name =:name, short_name =:short_name, password =:password,email =:email,email2 =:email2 where id =:id ', $params);
        } else {
            DB::insert('insert into users (name, short_name,password,email,email2) values (:name,:short_name,:password,:email,:email2) ', $params);
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
