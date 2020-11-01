{{ Form::open(['method' => 'get']) }}
    {{ csrf_field() }}
    <div class='form-group'>
        {{ Form::label('area_id','エリア:') }}
        {{ Form::select('area_id', $areas, ['class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::submit('エリア検索',['class' => 'btn btn-outline-primary']) }}
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
{{ Form::close() }}