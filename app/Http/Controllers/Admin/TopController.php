<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Top;

class TopController extends Controller
{
    public function index(Request $request)
    {
      $cond_place = $request->cond_place;
      if ($cond_place != '') {
          // 検索されたら検索結果を取得する
          $posts = Top::where('place', $cond_place)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Top::all();
      }
      return view('admin.shelter.index_top', ['posts' => $posts, 'cond_place' => $cond_place]);
    }
}
