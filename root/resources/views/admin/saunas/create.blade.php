@extends('admin.base')

@section('title', '行ったことある施設を登録')
@section('css')

@endsection

@section('content')
<form action="{{ route('admin.saunas.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @include('admin.saunas.form-controls', ['readOnly' => false])
  <div class="form-group row">
    <div class="col-3">
      <a href="{{ route('admin.saunas.index') }}" class="btn btn-secondary">一覧へ</a>
    </div>
    <div class="col-9 text-right">
      <button type="submit" class="btn btn-primary">登録</button>
    </div>
  </div>
</form>
@endsection

@section('script')

@endsection
