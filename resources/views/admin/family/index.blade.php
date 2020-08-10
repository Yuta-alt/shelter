@extends('layouts.toolbar')
@section('title', '登録済み苗字の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>苗字一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\FamilyController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\FamilyController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">苗字</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
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
            <div class="admin-news col-md-5 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">苗字</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $family)
                                <tr>
                                    <th>{{ $family->id }}</th>
                                    <td>{{ str_limit($family->FamilyName, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\FamilyController@edit', ['id' => $family->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\FamilyController@delete', ['id' => $family->id]) }}">削除</a>
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