@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ダッシュボード</h1>
@stop

@section('content')
<p>ここがコンテンツ部分です</p>
@stop

@section('css')
    {{-- ページごとのCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
        <script> console.log('ページごとのJSの記述');</script>
@stop