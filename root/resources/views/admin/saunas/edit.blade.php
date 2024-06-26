@extends('admin.base')

@section('title', 'サウナ')
@section('subtitle', '編集')
@section('css')

@endsection

@section('content')
<form action="{{ route('admin.saunas.confirm', ['sauna' => $sauna]) }}" method="POST">
  @csrf
  @include('admin.saunas.edition', ['readOnly' => false])
  <div class="form-group row">
    <div class="col-3">
      <a href="{{ route('admin.saunas.show', ['sauna' => $sauna]) }}" class="btn btn-secondary">詳細へ</a>
    </div>
    <div class="col-9 text-right">
      <button type="submit" class="btn btn-primary">確認</button>
    </div>
  </div>
</form>
@endsection

@section('script')

@endsection
