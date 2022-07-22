@extends('layouts.after_login_header')
<style>
  .container {
    display: flex;
    padding: 0 100px;
    justify-content: space-between;
  }
.wrap {
  width: 47%;
}
img {
  width: 100%;
}
</style>
@section('title', 'Rese')

@section('content')
<div class="container">
  <article class="wrap shop-wrap">
    <div class="shop-ttl">
      <a href="/"><</a>
      <h2>{{ $shop->name }}</h2>
    </div>
    <img src="{{ $shop->genre->image }}" alt="">
    <section class="shop-content">
      <p class="shop-tag">#{{ $shop->area->area }} #{{ $shop->genre->genre }}</p>
      <p class="shop-detail">{{ $shop->shop_detail }}</p>
    </section>
  </article>
  <div class="wrap reservation-wrap">
    <h2>予約</h2>
    <form action="/done" method="post">
      @csrf
      <div class="input-form">
        <input type="date"><!-- 日付 -->
        <input type="time"><!-- 時間 -->
        <input type="text"><!-- 人数 -->
      </div>
      <table>
        <tr>
          <th>Shop</th>
          <td></td>
        </tr>
        <tr>
          <th>Date</th>
          <td></td>
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
      <input type="submit" value="予約する">
    </form>
  </div>

</div>
@endsection