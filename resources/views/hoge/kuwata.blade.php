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
<p>{{$msg}}</p>
<form method="POST" action="/kuwata">
{{csrf_field()}}
<p>
name:<input type="text" name="name" value="{{old('name')}}">
@if($errors->has('name'))
{{$errors->first('name')}}
@endif
</p>

<p>email:<input type="text" name="mail" value="{{old('mail')}}">
@if($errors->has('mail'))
{{$errors->first('mail')}}
@endif
</p>


<p>age:<input type="text" name="age" value="{{old('age')}}">
@if($errors->has('age'))
{{$errors->first('age')}}
@endif
</p>


<input type="submit" value="送信">
</form>

</body>
</html>