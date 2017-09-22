<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    //
    public function sample() {
        return view('hoge.index');
    }
}
