@extends('layouts.toolbar')
@section('title', 'グループ管理画面')

@section('content')
    <div class="container">
        <div class="col-md-12 mx-auto">
            <div>
                <h3>グループ名編集</h3>
                <form action="{{ action('Admin\FamilyController@update') }}" method="post"
                    enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div>
                        <a> 編集中グループ名：</a>
                        <a> {{$family_form->FamilyName}}</a>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="FamilyName"
                            value="{{ $family_form->family_id }}">
                    </div>
                    <div>
                        <input type="hidden" name="id" value="{{ $family_form->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-12 mx-auto">
            <h3>グループメンバー</h3>
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
                </tbody>
            </table>
        </div>
        
        
    </div>
@endsection