<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Top;

class TopController extends Controller
{
    // public function add()
    // {
    //     return view('admin.news.create');
    // }
    
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Top::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Top::all();
      }
      return view('admin.top.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function create(Request $request)
    {
        
        // 以下を追記
      // Varidationを行う
      $this->validate($request, Top::$rules);

      $top = new Top;
      $form = $request->all();
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);

      // データベースに保存する
      $top->fill($form);
      $top->save();
      
    // admin/top/createにリダイレクトする
    return redirect('admin/top/create');
    }
    
}
