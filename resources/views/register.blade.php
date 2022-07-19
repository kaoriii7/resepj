@extends('layouts.before_login_header')
<style>

</style>
@section('title', 'Rese')

@section('content')
<div class="container">
  <h3>Registration</h3>
  <form action="/thanks" method="post">
    <input type="text">
    <input type="text">
    <input type="text">
    <button type="submit">登録</button>
  </form>
</div>
@endsection