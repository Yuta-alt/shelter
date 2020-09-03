@extends('layouts.toolbar')
@section('title', 'home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h2>運営告知</h2>
            <div class="table-responsive">
                <table class="table table-dark" border="3">
                    <thead>
                        <tr>
                            <th width="10%">タイトル</th>
                            <th width="20%">本文</th>
                            <th width="10%">更新日時</th>
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
        <div class="col-md-12 mx-auto">
        <h3>メンバー近況</h3>
        <table class="table table-dark" style="text-align:center;" border="3">
            <thead>
              <tr>
                <th width="10%">名前</th>
                <th width="20%">所在</th>
                <th width="20%">健康状態</th>
                <th width="20%">グループ名</th>
                <th width="20%">更新日時</th>
              </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection