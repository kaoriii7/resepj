@extends('layouts.after_login_header')

<style>
  .container {
    display: flex;
    padding: 0 100px;
    justify-content: space-between;
  }
  a, input, select {
    cursor: pointer;
  }

/* 店舗詳細 */

  .wrap {
    width: 47%;
  }
  img {
    width: 100%;
  }
  .fa-heart {
    color: white;
    font-size: 40px;
    cursor: pointer;
  }

/* 予約フォーム */


  </style>

@section('title', 'Rese')

@section('content')
<div class="container">
  <article class="wrap shop-wrap">
    <div class="shop-ttl">
      <a href="/"><</a>
      <h2>{{ $shop->name }}</h2>
      <i class="fa-solid fa-heart"><input type="hidden"></i>
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
        <input id="date_id" type="date">
        <select id="time_id" name="time_id">
          @foreach ($times as $time)
            <option>{{ $time->reservation_time }}</option>
          @endforeach
        </select>
        <select id="person_id" name="person_id">
          @foreach ($persons as $person)
            <option>{{ $person->number_of_persons }}人</option>
          @endforeach
        </select>
      </div>
      <table>
        <tr>
          <th>Shop</th>
          <td>{{ $shop->name }}</td>
        </tr>
        <tr>
          <th>Date</th>
          <td id="output_date"></td>
        </tr>
        <tr>
          <th>Time</th>
          <td id="output_time"></td>
        </tr>
        <tr>
          <th>Number</th>
          <td id="output_num">人</td>
        </tr>
      </table>
      <input type="submit" value="予約する">
    </form>
  </div>
</div>
<script type="text/javascript">

  const inputDate = document.getElementById('date_id');
  const outputDate = document.getElementById('output_date');
  const inputTime = document.getElementById('time_id');
  const outputTime = document.getElementById('output_time');
  const inputNumber = document.getElementById('person_id');
  const outputNumber = document.getElementById('output_num');

  inputDate.addEventListener('input', updateDate);
  inputTime.addEventListener('input', updateTime);
  inputNumber.addEventListener('input', updateNumber);


  function updateDate(e) {
    outputDate.textContent = e.target.value;
  }
  function updateTime(e) {
    outputTime.textContent = e.target.value;
  }
  function updateNumber(e) {
    outputNumber.textContent = e.target.value;
  }

</script>
@endsection