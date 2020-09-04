@extends('layouts.toolbar')
@section('title', 'ユーザー検索')

@section('content')

<div class="container">
    <div class="col-md-12 mx-auto">
    <h3>メンバー招待</h3>
        <div>
            <form action="{{ action('Admin\UserController@index') }}" method="get">
                <div>
                    <a>任意ID入力欄：</a>
                </div>
                <div>
                    <input type="text" class="form-control" name="" value="" >
                </div>
                <div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="検索">
                </div>
            </form>
        </div>
    <h5>検索結果</h5>
        <div class="col-md-12 mx-auto">
            <div class="row">
              <table class="table table-dark" style="text-align:center;" border="3">
                <thead>
                  <tr>
                    <th width="20%">任意ID</th>
                    <th width="20%">名前</th>
                    <th width="10%">申請</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

@endsection