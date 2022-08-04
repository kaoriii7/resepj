<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Time;
use App\Models\Person;
use App\Models\Reservation;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request, Shop $shop)
    {
      $shops = Shop::all();
      $areas = Area::all();
      $genres = Genre::all();

      $area_id = $request->input('area_id');
      $genre_id = $request->input('genre_id');
      $search_name = $request->input('search_name');

      $query = Shop::query();

      if ($area_id)  {
        $shops = $query->where('area_id', $area_id)->get();
      }
      if ($genre_id)  {
        $shops = $query->where('genre_id', $genre_id)->get();
      }
      if ($search_name) {
        $shops = $query->where('name', 'like', '%'.$search_name.'%')->get();
      }

      $like = Like::where('user_id', Auth::id())->exists();

var_dump($like);
      return view('index', compact('shops', 'areas', 'genres', 'area_id', 'genre_id', 'search_name', 'like'));
    }

    public function detail($id, Request $request)
    {
      $shop = Shop::find($id);
      $times = Time::all();
      $persons = Person::all();

      $user_id = $request->input('user_id');
      $shop_id = $request->input('shop_id');
      $reservation_date = $request->input('reservation_date');
      $time_id = $request->input('time_id');
      $person_id = $request->input('person_id');

      return view('detail', compact('shop', 'user_id', 'shop_id', 'reservation_date', 'times', 'time_id', 'persons', 'person_id'));
    }

    public function add()
    {
      return view('done');
    }

    public function create(Request $request)
    {
      $form = $request->all();
      $reservation = Reservation::create($form);

        return redirect('mypage', '$reservation');
    }

    public function check(Request $request)
    {
      $text = ['text' => 'ログインして下さい。'];
      return view('auth', $text);
    }

    public function checkUser(Request $request, Shop $shop)
    {
      $email = $request->email;
      $password = $request->password;

      if (Auth::attempt(['email' => $email,
              'password' => $password])) {
        $text =   'ようこそ'. Auth::user()->name . 'さん！';
        $likes = Like::where('user_id', Auth::id())->get();
        return view('mypage', compact('text', 'email', 'password', 'likes'));
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
