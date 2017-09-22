<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BarController extends Controller
{

    public function index(Request $request, Response $response) {

        $html = <<<EOF
<html>
<head>
<title>sampleページ</title>
<style>
body {font-size:16pt; color:#999;}
h1{font-size:10pt; text-align:right; color:#eee;
}
</style>
</head>
<body>
<h1>Hello</h1>
<p>Hello Controllerのサンプルページ</p>
</body>
request: <pre>{$request}</pre>
response: <pre>{$response}</pre>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }
}
