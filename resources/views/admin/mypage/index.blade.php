@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
<div class="container">
  <div class="row">
       <h1>マイページ</h1>
  </div>
  <div class="row">
    <div class="admin-news col-md-12 mx-auto">
      <div class="row">
        <table class="table table-dark" style="text-align:center;" border="3">
          <thead>
            <tr>
              <th width="20%">項目</th>
              <th width="40%">情報</th>
              <th width="10%">操作</th>
              <th width="30%">最終更新</th>
            </tr>
          </thead>
          <tbody>
            <th>名前　(Name)</th>
            <th>{{ Auth::user()->name }} <span class="caret"></span></th>
            <th>-</th>
            <th>-</th>
          </tbody>
          <tbody>
            <th>苗字　(FamilyName)</th>
            <th></th>
            <th><a href="https://f62e09a90c6c4456a29ef067cc9afe4e.vfs.cloud9.us-east-2.amazonaws.com/admin/mypage/edit_family">編集</a></th>
            <th></th>
          </tbody>
          <tbody>
            <th>健康状態　(Body)</th>
            <th></th>
            <th>編集</th>
            <th></th>
          </tbody>
          <tbody>
            <th>現在地　(Where)</th>
            <th></th>
            <th>編集</th>
            <th></th>
          </tbody>
          <tbody>
            <th>備考　(Topic)</th>
            <th></th>
            <th>編集</th>
            <th></th>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection