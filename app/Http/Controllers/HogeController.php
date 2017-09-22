<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    //
    public function sample() {
        return view('hoge.index');
    }

    public function sample2() {
        //データの引き渡し
        return view ('hoge.sample2',[
            'msg' => '引き渡すメッセージです。'
        ]);
    }

    public function sample3($id2='何もなし') {
        //データの引き渡し
        return view ('hoge.sample3',[
            'id' => 'urlからのおくりもの' . $id2
        ]);
    }

    public function sample4(Request $request) {
        //http://192.168.33.10/sample4?id=98みたいなurlで値取れる
        //データの引き渡し
        return view ('hoge.sample4',[
            'id' => 'urlからのおくりもの' . $request->id
        ]);
    }

    public function sample5() {
        return view ('hoge.sample5',[
            'msg' => 'bradeレイアウトテンプレートに表示します'
        ]);
    }

    /**  postの処理に関して **/
    public function sample6() {
        return view ('hoge.sample6',[
            'msg' => '好きな値を入れてね'
        ]);
    }
    public function hoge2(Request $request) {

        return view ('hoge.sample6', [
            'msg' => $request->message
        ]);
    }

}
