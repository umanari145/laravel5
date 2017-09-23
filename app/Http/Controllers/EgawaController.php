<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EgawaRequest;

class EgawaController extends Controller
{
    public function index()
    {
        return view('hoge.egawa',['msg' => 'フォームを入力してください。']);
    }

    public function post(EgawaRequest $request)
    {
        //controllerに到達する前に自動的に判定

        return view('hoge.egawa',['msg' => '正しく入力されました。']);
    }
}
