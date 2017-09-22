<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    //web.phpでController自体を指定しているとここにくる
    public function __invoke(){

        return <<<EOF
<html>
<head>
<title>foo</title>
</head>
<body>
<h1>foo Controller</h1>
<p>this is foo controller</p>
</body>
</html>
EOF;
    }
}
