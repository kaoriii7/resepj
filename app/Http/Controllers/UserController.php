<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
      $likes = Like::where('user_id', Auth::id())->get();
      $user = Auth::user();
      $text =   'ようこそ'. Auth::user()->name . 'さん！';


      return view('mypage', compact('likes', 'user', 'text'));
    }

    public function delete(Request $request)
    {

    }
}
