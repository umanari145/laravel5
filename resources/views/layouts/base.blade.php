<html>
<head>
<title>@yield('title')</title>
<style>
body {
    font-size: 16pt;
    color: #999;
}

h1 {
    font-size: 50pt;
    text-align: right;
    color: #f6f6f6;
    margin: -40px 0px -50px 0;
}
</style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')

    <ul>
        <p class="menutitle">※メニュー</p>
        <li>@show<!-- sectionのおわり --></li>
    </ul>

    <hr size="1">

    <div class="content">
    @yield('content')
    </div>

    <p> 'view_message' => {{$view_message}}</p>


    <div class="footer">
    @yield('footer')
    </div>


</body>
<p>this is sample page with template</p>
</html>