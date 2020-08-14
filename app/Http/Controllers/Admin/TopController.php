<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shelters;
use App\News;

class TopController extends Controller
{
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $news = News::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $news = News::all();
      }
      
      return view('admin.mypage.top',
      ['cond_title' => $cond_title, 'news' => $news]);
   
    }
}
