<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/reset.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/18426ca9a1.js" crossorigin="anonymous"></script>
    <style>
      * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }
      body {
        background: #E6E6FA;
      }
      .header {
        display: flex;
        justify-content: space-between;
        padding: 50px 100px;
      }
      .ttl-wrap {
        display: flex;
        align-items: center;
      }
      h1 {
        margin-left: 20px;
        font-size: 40px;
        color: #1463ff;
      }

      /* menu-wrap */

      .nav {
        position: absolute;
        height: 100vh;
        width: 100%;
        left: -100%;
        background: #E6E6FA;
        transition: .7s;
        text-align: center;
      }
      .nav ul{
        padding-top: 200px;
      }
      .nav ul li{
        list-style-type: none;
        margin-top: 30px;
        font-size: 28px;
        font-weight: bold;
        color: #1463ff;
      }
      .menu {
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 7px;
        background: #1463ff;
        cursor: pointer;
        position: relative;
      }
      .menu__line--top,
      .menu__line--middle,
      .menu__line--bottom {
        display: inline-block;
        height: 2px;
        border-radius: 30px;
        background-color: white;
        position: absolute;
        left: 10px;
        transition: 0.5s;
      }
      .menu__line--top {
        width:15px;
        top: 16px;
      }
      .menu__line--middle {
        width: 26px;
        top: 24px;
      }
      .menu__line--bottom {
        width: 7px;
        bottom: 16px;
      }
      .menu.open span:nth-of-type(1) {
        top: 23px;
        transform: rotate(45deg);
        width: 26px;
      }
      .menu.open span:nth-of-type(2) {
        opacity: 0;
      }
      .menu.open span:nth-of-type(3) {
        top: 23px;
        transform: rotate(-45deg);
        width: 26px;
      }
      .in{
        transform: translateX(100%);
      }
    </style>
  </head>

  <body>
    <header class="header">
      <div class="ttl-wrap">
        <div class="menu-wrap">
          <nav class="nav" id="nav">
            <ul>
              <li><a href="/">Home</a></li>
              <form action="/" method="get">
              <button>LOGOUT</button>
              </form>
              <li><a href="/mypage">MYPAGE</a></li>
            </ul>
          </nav>
          <div class="menu" id="menu">
            <span class="menu__line--top"></span>
            <span class="menu__line--middle"></span>
            <span class="menu__line--bottom"></span>
          </div>
        </div>
        <h1>@yield('title')</h1>
      </div>
    </header>
    <main class="content">
    @yield('content')
    </main>
    <script type="text/javascript">
      const target = document.getElementById("menu");
      target.addEventListener('click', () => {
        target.classList.toggle('open');
        const nav = document.getElementById("nav");
        nav.classList.toggle('in');
      });
    </script>
  </body>

</html>