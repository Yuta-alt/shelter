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
              <th width="300%">最終更新</th>
            </tr>
          </thead>
          <tbody>
            <th>名前</th>
            <th></th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>苗字</th>
            <th></th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>健康状態</th>
            <th></th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>現在地</th>
            <th></th>
            <th></th>
            <th></th>
          </tbody>
          <tbody>
            <th>備考</th>
            <th></th>
            <th></th>
            <th></th>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection