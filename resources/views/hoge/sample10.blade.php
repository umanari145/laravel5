
<!-- 親クラスのテンプレートを取得 -->
@extends('layouts.base')

<!-- 変数の設定 -->
@section('title','Sample10')

<!-- htmlのパーツを親に渡す -->
@section('menubar')
  <!-- 親のパーツを使う -->
  @parent
  sample10ページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要な記述です。</p>

  <!-- componentタグの違いはただの変数かhtmlタグ化の違い -->
  @include('components.message',[
    'msg_title'   => 'sample10のメッセージです',
    'msg_content' => 'sample10のコンテンツです'
  ])

  <ul>
     @each('components.item', $data, 'item')
  </ul>
@endsection


@section('footer')
  footerだよ
@endsection
