
<!-- 親クラスのテンプレートを取得 -->
@extends('layouts.base')

<!-- 変数の設定 -->
@section('title','Sample12')

<!-- htmlのパーツを親に渡す -->
@section('menubar')
  <!-- 親のパーツを使う -->
  @parent
  sample12ページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要な記述です。</p>

  <middleware>http://google.co.jp</middleware>


@endsection




@section('footer')
  footerだよ
@endsection
