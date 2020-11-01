@extends('layout');

@section('content')
    <div class='jumbotron'>
        <h1>都内のおすすめ喫茶店</h1>
        <p></p>
        <h2>店舗一覧</h2>
    </div>

    @include('search')

    <p>{{ $message }}</p>

    <table class='table table-striped table-hover'>
        <tr>
            <th>エリア</th><th>店名</th><th>住所</th>
        </tr>
    @foreach ($shops as $shop)
        <tr>
            <td>{{ $shop->area->name }}</td>
            <td>
                <a href={{ route('shop.detail', ['id' => $shop->id]) }}>{{ $shop->name }}</a>
            </td>
            <td>{{ $shop->address }}</td>
        </tr>
    @endforeach
    </table>
    <a href={{ route('shop.new') }} class='btn btn-outline-primary'>新規作成</a>
@endsection