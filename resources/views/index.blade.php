@extends('layouts.after_login_header')
<style>
  .container {
  }
  .content {
    margin: 0 100px;
  }
  .card {
    float: left;
    width: 23%;
    margin-right: calc(5% / 3);
    margin-top: 24px;
    background: white;
    border-radius: 7px;
  }
  .card:nth-of-type(4n) {
    margin-right: 0;
  }
  .img img {
    width: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-top-right-radius: 7px;
    border-top-left-radius: 7px;
  }
  .card-content {
    padding: 20px;
  }
  .card-ttl {
    margin-bottom: 5px;
    font-size: 24px;
  }
  .card-tag {
    font-size: 14px;
  }
  .btn-wrap {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }
  .btn {
    padding: 5px 20px;
    border: none;
    border-radius: 7px;
    background: #1463ff;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
  }
  .fa-heart {
    color: #E6E6FA;
    font-size: 40px;
  }
</style>
@section('title', 'Rese')

@section('content')
<div class="container">
  <form action="" method="get">
   <div class="search-form">
    <select name="area_id">
      <option value="">All areas</option>
      @foreach ($areas as $area)
        @if ($area->id == $area_id)
          <option value="{{ $area->id }}" selected>{{ $area->area }}</option>
        @else
          <option value="{{ $area->id }}">{{ $area->area }}</option>
        @endif
      @endforeach
    </select>
    <select name="genre_id">
      <option value="">All genres</option>
      @foreach ($genres as $genre)
        @if ($genre->id == $genre_id)
          <option value="{{ $genre->id }}" selected>{{ $genre->genre }}</option>
        @else
          <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
        @endif
      @endforeach
    </select>
    <input type="search" placeholder="Search..." name="search_name" value="@if (isset($search_name)) {{ $search_name }} @endif">
    <button type="submit">search</button>
   </div>
  </form>
  @foreach ($shops as $shop)
  {{var_dump($shop)}}
  <article class="card">
    <div class="img">
      <img src="{{ $shop->genre->image }}" alt="">
    </div>
    <section class="card-content">
        <h3 class="card-ttl">{{ $shop->name }}</h3>
        <p class="card-tag">#{{ $shop->area->area }} #{{ $shop->genre->genre }}</p>
        <div class="btn-wrap">
          <a href="/detail/{{ $shop->id }}"><button class="btn">詳しくみる</button></a>
            <form action="{{ route('like') }}" method="post">
              @csrf
              @if ($likes->shop_id == $shop->id)
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <button type="submit">
                  <i class="fa-solid fa-heart"></i>
                </button>
              @else
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <button type="submit">
                  unlike
                </button>
              @endif
            </form>
        </div>
    </section>
  </article>
  @endforeach
</div>
@endsection