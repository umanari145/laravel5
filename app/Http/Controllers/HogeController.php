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
        //  ちなみに hoge/sample5.phpとhoge/sample5.blade.phpがあった場合は後者が優先度が高くなる
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

    public function sample7(Request $request) {
        return view ('hoge.sample7', [
            'items' => [
               'first'  => 'ryu',
               'second' => 'ken',
               'third'  => 'gouki'
            ],
            'items2' =>[
               'ichiro','jirou','saburou'
            ]
        ]);
    }

    public function sample8(Request $request) {
        return view ('hoge.sample8');
    }

    public function sample9(Request $request) {
        return view ('hoge.sample9');
    }

    public function sample10(Request $request) {
        return view ('hoge.sample10',[
            'data' =>[
                ['name' => 'tarou' , 'val' => 'val1'],
                ['name' => 'jirou' , 'val' => 'val2']
            ]
        ]);
    }

    public function sample11(Request $request) {
        return view ('hoge.sample11',[
            'data' => $request->data
        ]);
    }

    public function sample12(Request $request) {
        return view ('hoge.sample12');
    }
}
