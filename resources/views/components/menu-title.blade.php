  <div class="">
      {{ $slot }}
  </div>
    <script type="text/javascript">
      const target = document.getElementById("menu");
      target.addEventListener('click', () => {
        target.classList.toggle('open');
        const nav = document.getElementById("nav");
        nav.classList.toggle('in');
      });
    </script>
    <style>
      .header {
        display: flex;
        align-items: center;
        padding: 50px 100px;
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
        background: #f3f4f6;
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