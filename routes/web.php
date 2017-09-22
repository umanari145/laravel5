<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//直打ち
Route::get('hello', function (){
    return '<html><body><h1>hello</h1><p>this is sample page</p></body></html>';
});

$html = <<<EOF
<html>
<head>
<title>本日は晴天なり</title>
<style>
body {font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:right; color:#eee;
  margin:-40px 0px -50px 0;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>this is sample page.</p>
<p>サンプルページですよ!</p>
</body>
</html>
EOF;

//直うちヒアドキュメント
Route::get('hello2', function () use ($html) {
    return $html;
});

//直打ち+パラメータ
Route::get('hello3/{msg}', function ($msg) {

$html = <<<EOF
<html>
<head>
<title>本日は晴天なり</title>
<style>
body {font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:right; color:#eee;
  margin:-40px 0px -50px 0;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>{$msg}</p>
<p>サンプルページですよ!</p>
</body>
</html>
EOF;
    return $html;

});

//直打ち+パラメータ2つ
Route::get('hello4/{id}/{pass}', function ($id, $pass) {

$html = <<<EOF
id:{$id}
pass:{$pass}
EOF;
    return $html;

});

//直打ち+任意パラメータ(パラメーターあってもなくてもOK)
//通常はないとエラーになる
Route::get('hello5/{msg?}', function ($msg = 'no message') {

$html = <<<EOF
<html>
<head>
<title>本日は晴天なり</title>
<style>
body {font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:right; color:#eee;
  margin:-40px 0px -50px 0;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>{$msg}</p>
<p>サンプルページですよ!</p>
</body>
</html>
EOF;
    return $html;

});

//controllerに飛ばす
Route::get('hello6/{id?}/{pass?}', 'HelloController@index');

//通常の遷移
Route::get('hello7/other', 'HelloController@other');
Route::get('hello7/other2', 'HelloController@other2');

//シングルアクションか
Route::get('foo', 'FooController');

//requestオブジェクトを試しにとる
Route::get('bar', 'BarController@index');

Route::get('hoge', function (){
    //ディレクトリ/ファイル名
    return view('hoge.index');
});

Route::get('hoge2', 'HogeController@sample');

Route::resource('posts', 'PostsController');
