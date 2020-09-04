<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Topic;
use App\User;
// use App\Shelters;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request)
    {
      $cond_uuid = $request->cond_uuid;
      if ($cond_uuid != '') {
          // 検索されたら検索結果を取得する
          $posts = User::where('uuid', $cond_uuid)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = User::all();
      }
      return view('admin.user.index', ['posts' => $posts, 'cond_uuid' => $cond_uuid]);
    }
}
