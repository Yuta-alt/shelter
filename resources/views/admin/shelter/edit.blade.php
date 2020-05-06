@extends('layouts.admin')
@section('title', '避難所登録の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>避難所登録の編集</h2>
                <form action="{{ action('Admin\SheltersController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="place">名称</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ $shelter_form->place }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="address">所在地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $shelter_form->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="tel">tel</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tel" value="{{ $shelter_form->tel }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="URL">URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="URL" value="{{ $shelter_form->URL }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $shelter_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection