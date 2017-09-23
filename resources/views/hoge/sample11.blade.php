
<!-- 親クラスのテンプレートを取得 -->
@extends('layouts.base')

<!-- 変数の設定 -->
@section('title','Sample11')

<!-- htmlのパーツを親に渡す -->
@section('menubar')
  <!-- 親のパーツを使う -->
  @parent
  sample11ページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要な記述です。</p>

  @foreach($data as $item)
  <p>{{$item['name']}} :  {{$item['mail']}}</p>
  @endforeach

@endsection


@section('footer')
  footerだよ
@endsection
