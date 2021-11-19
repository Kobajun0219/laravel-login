@extends('layouts.defalt')

@section('content')
<div style="margin-top:50px;">
<h1>検索結果</h1>
@if(isset($users))
<table class="table">
  <tr>
    <th>ユーザー名</th><th>年齢</th><th>性別</th>
  </tr>
  @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td><td>{{$user->age}}</td><td>{{$user->sex}}</td>
    </tr>
  @endforeach
</table>
@endif
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>
@endsection
