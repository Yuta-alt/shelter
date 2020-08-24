@extends('layouts.toolbar')
@section('title', '避難所一覧')

@section('content')
    <div class="container">
        <div class="col-md-12 mx-auto">
            <h2>避難所一覧</h2>
            <div>
                <a href="{{ action('Admin\SheltersController@add') }}"
                    role="button" class="btn btn-success">新規登録</a>
            </div>
            <!--<div class="col-md-8">-->
            <!--    <form action="{{ action('Admin\SheltersController@index') }}" method="get">-->
            <!--        <div class="form-group row">-->
            <!--            <label class="col-md-2">名称→<br>一字一句同じじゃないと検出されない欠陥あり</label>-->
            <!--            <div class="col-md-8">-->
            <!--                <input type="text" class="form-control" name="cond_place" value="{{ $cond_place }}">-->
            <!--            </div>-->
            <!--            <div class="col-md-2">-->
            <!--                {{ csrf_field() }}-->
            <!--                <input type="submit" class="btn btn-primary" value="検索">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </form>-->
            <!--</div>-->
            <div class="col-md-12 mx-auto">
            <select type="text" class="form-control" name="a">                          
                @foreach($posts as $shelter)
                    <option value="{{ $shelter->prefecture }}">{{ $shelter->prefecture }}</option>
                @endforeach
            </select>
        
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="10%">都道府県</th>
                            <th width="10%">名称</th>
                            <th width="10%">市町村</th>
                            <th width="30%">所在地</th>
                            <!--<th width="20%">tel</th>-->
                            <!--<th width="20%">URL</th>-->
                            <th width="10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $shelter)
                            <tr>
                                <th>{{ $shelter->prefecture }}</th>
                                <td>{{ \Str::limit($shelter->place, 50) }}</td>
                                <td>{{ \Str::limit($shelter->cities, 50) }}</td>
                                <td>{{ \Str::limit($shelter->address, 100) }}</td>
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