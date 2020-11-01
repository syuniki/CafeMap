@extends('layout');

@section('content')
    <h1 style='margin-bottom: 30px'>新しいお店</h1>
    {{ Form::open(['route' => 'shop.store']) }}
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
            {{  Form::submit('作成する',['class' => 'btn btn-outline-primary']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
@endsection