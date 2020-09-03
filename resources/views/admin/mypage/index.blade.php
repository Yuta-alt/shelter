@extends('layouts.toolbar')
@section('title', 'マイページ')

@section('content')
<div class="container">
  <div class="col-md-12 mx-auto">
    <div class="row">
        <h3>ユーザーステータス</h3>
        <table class="table table-dark" style="text-align:center;" border="3">
            <thead>
              <tr>
                <th width="10%">名前</th>
                <th width="20%">所在</th>
                <th width="20%">健康状態</th>
                <th width="30%">備考</th>
                <th width="5%">操作</th>
              </tr>
            </thead>
            <tbody>
              <!---->
            </tbody>
        </table>
      <h3>グループ一覧</h3>
      <div class="botton">
        <form action="{{ action('Admin\FamilyController@create') }}" method="get">
          {{ csrf_field() }}
          <input type="submit" class="btn btn-success" value="新規グループ作成">
        </form>
      </div>
      <div class="col-md-12 mx-auto">
        <div class="row">
          <table class="table table-dark" style="text-align:center;" border="3">
            <thead>
              <tr>
                <th width="20%">グループ名</th>
                <th width="10%">操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $family)
                <tr>
                  <th>{{ str_limit($family->FamilyName, 100) }}</th>
                  <td>
                    <div>
                      <a href="{{ action('Admin\FamilyController@edit', ['id' => $family->id]) }}">グループ管理</a>
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
      
      <h3>承認通知：受信元一覧</h3>
      <div class="col-md-12 mx-auto">
        <div class="row">
          <table class="table table-dark" style="text-align:center;" border="3">
            <thead>
              <tr>
                <th width="20%">ID</th>
                <th width="20%">名前</th>
                <th width="20%">招待先グループ</th>
                <th width="10%">操作</th>
              </tr>
            </thead>
            <tbody>
              <!--@foreach($posts as $family)-->
              <!--  <tr>-->
              <!--    <th>{{ str_limit($family->FamilyName, 100) }}</th>-->
              <!--    <td>-->
              <!--      <div>-->
              <!--        <a href="{{ action('Admin\FamilyController@edit', ['id' => $family->id]) }}">グループ管理</a>-->
              <!--      </div>-->
              <!--      <div>-->
              <!--        <a href="{{ action('Admin\FamilyController@delete', ['id' => $family->id]) }}">削除</a>-->
              <!--      </div>-->
              <!--    </td>-->
              <!--  </tr>-->
              <!--@endforeach-->
            </tbody>
          </table>
        </div>
      </div>
      
      <h3>承認通知：送信先一覧</h3>
      <div class="col-md-12 mx-auto">
        <div class="row">
          <table class="table table-dark" style="text-align:center;" border="3">
            <thead>
              <tr>
                <th width="20%">ID</th>
                <th width="20%">名前</th>
                <th width="20%">招待元グループ</th>
                <th width="10%">操作</th>
              </tr>
            </thead>
            <tbody>
              <!--@foreach($posts as $family)-->
              <!--  <tr>-->
              <!--    <th>{{ str_limit($family->FamilyName, 100) }}</th>-->
              <!--    <td>-->
              <!--      <div>-->
              <!--        <a href="{{ action('Admin\FamilyController@edit', ['id' => $family->id]) }}">グループ管理</a>-->
              <!--      </div>-->
              <!--      <div>-->
              <!--        <a href="{{ action('Admin\FamilyController@delete', ['id' => $family->id]) }}">削除</a>-->
              <!--      </div>-->
              <!--    </td>-->
              <!--  </tr>-->
              <!--@endforeach-->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection