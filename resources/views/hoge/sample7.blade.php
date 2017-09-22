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

<ul>
@foreach($items as $key => $item)
  <li> {{$key}}: {{$item}}</li>
@endforeach
</ul>


@foreach($items as $val)

@if($loop->first)
<p>ループの最初だけ行います</p>
@endif

<li>{{$loop->iteration}} : {{$val}}</li>

@if($loop->last)
<p>一番最後はここを通ります</p>
@endif
@endforeach


@php
echo 'ここは素のPHPが書けます';
@endphp

</html>