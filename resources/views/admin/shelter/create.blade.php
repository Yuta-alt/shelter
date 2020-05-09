{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィールの新規登録'を埋め込む --}}
@section('title', '避難所の新規登録')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>避難所の新規登録</h2>
                <form action="{{ action('Admin\SheltersController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名称</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ old('place') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">市町村</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cities" value="{{ old('cities') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">所在地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">tel</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="URL" value="{{ old('URL') }}">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection