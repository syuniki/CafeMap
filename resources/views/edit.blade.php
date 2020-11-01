@extends('layout');

@section('content')
    <h1 style='margin-bottom: 30px'>新しいお店</h1>
    {{ Form::model($shop,['route' => ['shop.update', $shop->id]]) }}
        <div class='form-group'>
            {{ Form::label('name','店名:') }}
            {{ Form::text('name',null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('address', '住所:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('menu','おすすめメニュー:') }}
            {{ Form::text('menu',null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('area_id','エリア:') }}
            {{ Form::select('area_id', $areas) }}
        </div>
        <div class='form-group'>
            {{  Form::submit('更新する',['class' => 'btn btn-outline-success']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
@endsection