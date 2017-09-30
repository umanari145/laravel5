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
<ul>
@foreach($data as $item)
<!-- getDataはorマッパーのときのみ ochiai2 -->
<li>{{$item->name}}:{{$item->email}}<p>{{$item->getData()}}</p></li>
@endforeach
</ul>
</body>
</html>