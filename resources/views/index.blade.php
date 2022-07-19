@extends('layouts.before_login_header')
<style>
  .content {
    margin: 0 100px;
  }
  .card {
    width: 20%;
    background: white;
    border-radius: 7px;
  }
  .img {
    width: 100%;
    height: 20vh;
    border-top-right-radius: 7px;
    border-top-left-radius: 7px;
    background: url(https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg) center/cover no-repeat;
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
<div>
  @foreach ($items as $item)
  <article class="card">
    <div class="img">
    </div>
    <section class="card-content">
      <form action="/detail" method="get">
        @csrf
        <h3 class="card-ttl">{{ $item->name }}</h3>
        <p class="card-tag"># #</p>
        <div class="btn-wrap">
          <button class="btn">詳しくみる</button>
          <i class="fa-solid fa-heart"><input type="hidden"></i>
        </div>
      </form>
    </section>
  </article>
  @endforeach
</div>
@endsection