@extends('layout');

@section('content')
    <h1 style='margin-bottom: 30px'>{{ $shop->name }}</h1>
    <div class='row'>
        <div class='col-sm-1'></div>
        <div class='col-sm-11'>
            <p><strong>住所</strong>：{{ $shop->address }}</p>
            <p><strong>おすすめメニュー</strong>：{{ $shop->menu }}</p>
        </div>
    </div>
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a> | 
        <a href={{ route('shop.edit',['id' => $shop->id]) }}>編集する</a>
    </div>
    <p></p>
    {{ Form::open(['method' =>'delete', 'route' => ['shop.destroy', $shop->id]]) }}
        {{ Form::submit('削除する', ['class' => 'btn btn-outline-danger']) }}
    {{ Form::close() }}

@endsection