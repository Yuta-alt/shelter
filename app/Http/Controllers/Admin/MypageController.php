<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MypageController extends Controller
{
    public function index(Request $request)
    {
      return view('admin.mypage.index');
    }
    
    
    // public function edit(Request $request)
    // {
    //   // News Modelからデータを取得する
    //   $news = News::find($request->id);
    //   if (empty($news)) {
    //     abort(404);    
    //   }
    //   return view('admin.news.edit', ['news_form' => $news]);
    // }


    // public function update(Request $request)
    // {
    //   // Validationをかける
    //   $this->validate($request, News::$rules);
    //   // News Modelからデータを取得する
    //   $news = News::find($request->id);
    //   // 送信されてきたフォームデータを格納する
    //   $news_form = $request->all();
    //   unset($news_form['_token']);

    //   // 該当するデータを上書きして保存する
    //   $news->fill($news_form)->save();

    //   return redirect('admin/news');
    // }
}
