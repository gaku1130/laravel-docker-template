@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
    <div class="card-header">ToDo編集</div>
    <div class="card-body">
        <form method="POST" action="{{ route('todo.update', $todo->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
            <div class="col-md-6">
                <input type="text" class="form-control @if($errors->has('content')) border-danger @endif" name="content" value="{{ $todo->content }}">
                @if($errors->has('content'))
                <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="category" class="col-md-4 col-form-label text-md-right">カテゴリー</label>
            <div class="col-md-6">
                <select name="category" class="form-control @if($errors->has('category')) border-danger @endif">
                    <option value="">選択してください</option>
                    @foreach (['MUST', '自習', 'レビュー', 'プライベート', 'その他'] as $value)
                        <option value="{{ $value }}" @if(old('category') == $value) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
</div>
@endsection