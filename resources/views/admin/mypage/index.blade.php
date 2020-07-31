@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
        <h1>マイページ一覧</h1>
    </div>
    <div class="col-md-2">
        <form action="{{ action('Admin\MypageController@edit') }}" method="get">
            <div class="form-group row">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="編集（編集先はニュース。手入れ必要）">
            </div>
        </form>
    </div>
  </div>
  <div class="row">
    <div class="admin-news col-md-12 mx-auto">
      <div class="row">
        <table class="table table-dark" style="text-align:center;" border="3">
          <thead>
            <tr>
              <th width="20%">項目</th>
              <th width="40%">情報</th>
              <th width="40%">更新日時</th>
            </tr>
          </thead>
          <tbody>
            <th>名前　(Name)</th>
            <th>{{ Auth::user()->name }} <span class="caret"></span></th>
            <th>-</th>
          </tbody>
          <tbody>
            <th>苗字　(FamilyName)</th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>健康状態　(Body)</th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>現在地　(Where)</th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>備考　(Topic)</th>
            <th></th>
            <th></th>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection