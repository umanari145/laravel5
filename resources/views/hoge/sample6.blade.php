<html>
<head>
<title>sampleページ</title>
<style>
body {
    font-size: 16pt;
    color: #999;
}

h1 {
    font-size: 100pt;
    text-align: right;
    color: #eee;
    margin: -40px 0px -50px 0;
}
</style>
</head>
<body>
    <h1>template</h1>
    <p>templateページ</p>
</body>
<p>input pageへ飛びます</p>


@if($msg != "")
<p>こんにちは{{$msg}}さん</p>
@else
<p>何か入力をしてください</p>
@endif

<form method="POST" action="/sample6">
{{csrf_field()}}
<input type="text" name="message" value="">
<input type="submit" value="送信">

</html>