@extends('layouts.admin')
@section('place', '登録済み避難所の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>避難所一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\SheltersController@add') }}" role="button" class="btn btn-primary">新規登録</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\SheltersController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名称</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_place" value="{{ $cond_place }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-shelters col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">名称</th>
                                <th width="30%">所在地</th>
                                <th width="20%">tel</th>
                                <th width="20%">URL</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $shelter)
                                <tr>
                                    <th>{{ $shelter->id }}</th>
                                    <td>{{ \Str::limit($shelter->place, 50) }}</td>
                                    <td>{{ \Str::limit($shelter->address, 100) }}</td>
                                    <td>{{ \Str::limit($shelter->tel, 40) }}</td>
                                    <td>{{ \Str::limit($shelter->URL, 200) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\SheltersController@edit', ['id' => $shelter->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\SheltersController@delete', ['id' => $shelter->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection