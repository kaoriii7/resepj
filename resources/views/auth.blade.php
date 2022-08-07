@extends('layouts.before_login_header')
<style>
  .container {
    display: flex;
    justify-content: center;
  }
  .card {
    width: 28rem;
    background: white;
  }
  .card-ttl {
    padding: 30px 20px;
  }
  .input-form {
    margin: 10px 10px 10px 60px;
    width: 22rem;
  }
  .input-btn {
    text-align: right;
  }
  .input-btn input {
    margin: 10px 10px 30px 0;
  }
</style>
@section('title', 'Rese')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-ttl">
      <h3>Login</h3>
    </div>
    <form action="/mypage" method="post">
      <p>{{$text}}</p>
      <table>
        @csrf
        <tr>
          <td>
            <input class="input-form" type="text" name="email" placeholder="Email">
          </td>
        </tr>
        <tr>
          <td>
            <input class="input-form" type="password" name="password" placeholder="Password">
          </td>
        </tr>
        <tr>
          <td class="input-btn">
            <input type="submit" value="送信">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection