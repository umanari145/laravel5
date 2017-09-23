<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function create() {



        return view('hoge.ochiai_add');
    }

}
