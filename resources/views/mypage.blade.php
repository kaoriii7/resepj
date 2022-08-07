@extends('layouts.after_login_header')
<style>
  .container {
    padding: 0 100px;
  }
  .user-name {
    font-size: 24px;
    margin-bottom: 50px;
  }
  .content-wrap {
    display: flex;
  }
  .ttl {
    font-size: 20px;
  }
  .reservation-wrap {
    width: 40%;
  }
  .like-wrap {
    width: 50%;
  }
</style>
@section('title', 'Rese')

@section('content')
<div class="container">
    @if (Auth::check())
  <p class="user-name">{{ $text }}</p>
  @endif
  <div class="content-wrap">
    <div class="reservation-wrap">
      <h2 class="ttl">予約状況</h2>
      <div class="reservation-card">
        @isset($reservation)
        @foreach($reservation as $d)
        <h3>予約</h3>
        <table>
          <tr>
            <th>Shop</th>
            <td></td>
          </tr>
          <tr>
            <th>Date</th>
            <td>{{ $d }}</td>
          </tr>
          <tr>
            <th>Time</th>
            <td></td>
          </tr>
          <tr>
            <th>Number</th>
            <td></td>
          </tr>
        </table>
        @endforeach
        @endisset
      </div>
    </div>
    <div class="like-wrap">
      <h2 class="ttl">お気に入り店舗</h2>
      @foreach ($likes as $like)
      <div class="like-shop">
        <p>{{ $like->shop->name }}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection