<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function create(Request $request) {
      Like::create([
        'shop_id' => $request->input('shop_id'),
        'user_id' => Auth::id(),
      ]);

      return back();
    }

    public function delete(Request $request) {
      $like = Like::where('shop_id', $request->shop_id)->where('user_id', Auth::id())->delete();
      return back();
    }


}
