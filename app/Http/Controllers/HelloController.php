<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index($id = 'sample_id', $pass = 'aaaa') {
        return <<<EOF
<html>
<head>
<title>sampleページ</title>
<style>
body {font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:right; color:#eee;
  margin:-40px 0px -50px 0;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>Hello Controllerのサンプルページ</p>
</body>
id: {$id}
pass: {$pass}
</html>
EOF;
EOF;
    }
}
