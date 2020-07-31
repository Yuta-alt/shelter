<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでFamilies Modelが扱えるようになる
use App\Families;
use App\User;
use Carbon\Carbon;

class MypageController extends Controller
{
    public function index(Request $request)
    {
      return view('admin.mypage.index');
    }
    
    
    public function edit(Request $request)
    {
      // News Modelからデータを取得する
      $news = News::find($request->id);
      if (empty($news)) {
        abort(404);    
      }
      return view('admin.news.edit', ['news_form' => $news]);
    }
}
