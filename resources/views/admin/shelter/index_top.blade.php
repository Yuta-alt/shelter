@extends('layouts.admin')
@section('place', '登録済み避難所の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="list-shelters col-md-7 mx-auto">
                <div class="row">
                    <h2>避難所一覧</h2>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="10%">名称</th>
                                    <th width="10%">市町村</th>
                                    <th width="10%">所在地</th>
                                    <!--<th width="10%">tel</th>-->
                                    <!--<th width="10%">URL</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shelters as $shel)
                                    <tr>
                                        <th>{{ $shel->id }}</th>
                                        <td>{{ \Str::limit($shel->place, 50) }}</td>
                                        <td>{{ \Str::limit($shel->cities, 50) }}</td>
                                        <td>{{ \Str::limit($shel->address, 100) }}</td>
                                        <!--<td>{{ \Str::limit($shel->tel, 40) }}</td>-->
                                        <!--<td>{{ \Str::limit($shel->URL, 200) }}</td>-->
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