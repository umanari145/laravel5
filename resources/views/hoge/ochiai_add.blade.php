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

<form method="POST" action="/ochiai/create">
{{csrf_field()}}

<p>
name:<input type="text" name="name" value="{{old('name')}}">
@if($errors->has('name'))
{{$errors->first('name')}}
@endif
</p>

<p>email:<input type="text" name="email" value="{{old('email')}}">
@if($errors->has('email'))
{{$errors->first('email')}}
@endif
</p>

<input type="submit" value="送信">
</form>

</body>
</html>