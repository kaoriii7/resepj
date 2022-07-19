<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
      $items = Shop::all();
      return view('index', compact('items'));
    }

    public function detail()
    {
      return view('detail');
    }

    public function done(Request $request)
    {
      return view('done');
    }

    public function check(Request $request)
    {
      $text = ['text' => 'ログインして下さい。'];
      return view('auth', $text);
    }

    public function checkUser(Request $request)
    {
      $email = $request->email;
      $password = $request->password;
      if (Auth::attempt(['email' => $email,
              'password' => $password])) {
          $text =   'ようこそ'. Auth::user()->name . 'さん！';
          return view('mypage', ['text' => $text, 'email' => $email]);
      } else {
          $text = 'ログインに失敗しました';
          return view('auth', ['text' => $text]);
      }
    }

    public function getlogout()
    {
      Auth::logout();
      return view('index');
    }

}
