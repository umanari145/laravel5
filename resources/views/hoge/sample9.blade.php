
<!-- 親クラスのテンプレートを取得 -->
@extends('layouts.base')

<!-- 変数の設定 -->
@section('title','Sample9')

<!-- htmlのパーツを親に渡す -->
@section('menubar')
  <!-- 親のパーツを使う -->
  @parent
  sample9ページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要な記述です。</p>

  <!-- 要素component を呼び出す -->
  @component('components.message')
    <!-- componentに変数を設定する -->
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
         これはメッセージです。
    @endslot

  @endcomponent

@endsection


@section('footer')
  footerだよ
@endsection
