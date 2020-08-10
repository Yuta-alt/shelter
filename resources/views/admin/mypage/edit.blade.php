@extends('layouts.toolbar')
@section('title', 'マイページ編集')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
        <h1>マイページ編集一覧</h1>
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
            </tr>
          </thead>
          <tbody>
            <th>名前　(Name)</th>
            <th>{{ Auth::user()->name }} <span class="caret"></span></th>
          </tbody>
          <tbody>
            <th>苗字　(FamilyName)</th>
            <th></th>
          </tbody>
          <tbody>
            <th>健康状態　(Body)</th>
            <th></th>
          </tbody>
          <tbody>
            <th>現在地　(Where)</th>
            <th></th>
          </tbody>
          <tbody>
            <th>備考　(Topic)</th>
            <th></th>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection