@extends('layouts.after_login_header')
<style>

</style>
@section('title', 'Rese')

@section('content')
<div class="container">
  <article class="shop-wrap">
    <div class="shop-ttl">
      <button>return</button>
      <h2>仙人</h2>
    </div>
    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
    <section class="shop-content">
      <p class="shop-tag"></p>
      <p class="shop-detail"></p>
    </section>
  </article>
  <div class="reservation-wrap">
    <h2>予約</h2>
    <form action="/done" method="post">
      @csrf
      <div class="input-form">
        <input type="text">
        <input type="text">
        <input type="text">
      </div>
      <table>
        <tr>
          <th>Shop</th>
          <td></td>
        </tr>
        <tr>
          <th>Shop</th>
          <td></td>
        </tr>
        <tr>
          <th>Shop</th>
          <td></td>
        </tr>
        <tr>
          <th>Shop</th>
          <td></td>
        </tr>
      </table>
      <input type="submit" value="予約する">
    </form>
  </div>

</div>
@endsection