<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Likes;
use Illuminate\Support\Facades\Auth;

class UserControllser extends Controller
{

    public function check(Request $request)
    {
      $text = ['text' => 'ログインして下さい。'];
      return view('auth', $text);
    }

    public function checkUser(Request $request)
    {
      $email = $request->email;
      $password = $request->password;
      $reservations = Reservation::where('user_id', Auth::id())->get();

      if (Auth::attempt(['email' => $email,
              'password' => $password])) {
          $text =   'ようこそ'. Auth::user()->name . 'さん！';
          return view('mypage', compact('text', 'email', 'password', 'reservations'));
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

    public function index(Request $request)
    {
      $reservations = Reservation::where('user_id', Auth::id())->get();
      $user = Auth::user();
      $text = 'ようこそ'. Auth::user()->name . 'さん！';
      $email = $request->email;
      $password = $request->password;

      return view('mypage', compact('reservations', 'user', 'text', 'email', 'password'));
    }

    public function delete(Request $request)
    {
      Reservation::where('user_id', Auth::id())->where('id', $request->reservation_id)->delete();
      return redirect('mypage');
    }
}
