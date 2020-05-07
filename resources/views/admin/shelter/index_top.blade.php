@extends('layouts.admin')
@section('place', '登録済み避難所の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="list-shelters col-md-7 mx-auto">
                <div class="row">
                    <h2>避難所一覧</h2>
                    <div class="col-md-12 mx-auto">
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
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="10%">名称</th>
                                    <th width="10%">所在地</th>
                                    <th width="10%">tel</th>
                                    <th width="10%">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shelters as $shel)
                                    <tr>
                                        <th>{{ $shel->id }}</th>
                                        <td>{{ \Str::limit($shel->place, 50) }}</td>
                                        <td>{{ \Str::limit($shel->address, 100) }}</td>
                                        <td>{{ \Str::limit($shel->tel, 40) }}</td>
                                        <td>{{ \Str::limit($shel->URL, 200) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="list-news col-md-4 mx-auto">
                <div class="row">
                    <h2>告知一覧</h2>
                    <div class="col-md-12 mx-auto">
                        <form action="{{ action('Admin\NewsController@index') }}" method="get">
                            <div class="form-group row">
                                <label class="col-md-3">タイトル</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                                </div>
                                <div class="col-md-2">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-primary" value="検索">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="20%">タイトル</th>
                                    <th width="20%">本文</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $ne)
                                    <tr>
                                        <td>{{ str_limit($ne->title, 100) }}</td>
                                        <td>{{ str_limit($ne->body, 250) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection