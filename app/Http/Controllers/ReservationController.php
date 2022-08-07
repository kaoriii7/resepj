<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{

  public function create(Request $request)
  {
    Reservation::create([
      'shop_id' => $request->input('shop_id'),
      'user_id' => Auth::id(),
      'date' => $request->input('date'),
      'time' => $request->input('time'),
      'person' => $request->input('person'),
    ]);
  }

  public function done()
  {
    return view('done');
  }


}
