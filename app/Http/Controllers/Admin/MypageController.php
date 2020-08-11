<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでFamilies Modelが扱えるようになる
use App\Family;
use App\Shelter;
use App\User;
use Carbon\Carbon;

class MypageController extends Controller
{
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Family::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのグループを取得する
          $posts = Family::all();
      }
      
      return view('admin.mypage.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    
    public function edit(Request $request)
    {
      // Family Modelからデータを取得する
      // $family = Family::find($request->id);
      // return view('admin.mypage.edit');
    }
    
    public function update(Request $request)
    {
      // ↓デバッグコマンド
      // dd($request); 
        // Validationをかける
      $this->validate($request, Family::$rules);
      // Families Modelからデータを取得する
      $family = Family::find($request->id);
      // 送信されてきたフォームデータを格納する
      $family_form = $request->all();
      unset($family_form['_token']);
      // 該当するデータを上書きして保存する
      $family->fill($family_form)->save();
      
      return redirect('admin/family');
    }
}
