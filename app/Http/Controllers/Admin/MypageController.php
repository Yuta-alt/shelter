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
    
  //   public function edit_family(Request $request)
  //   {
  //     // Families Modelからデータを取得する
  //     $families = Families::find($request->id);
      
  //     // 下記ver.だと404エラー発生
  //     // if (empty($families)) {
  //     //   abort(404);    
  //     // }
  //     // return view('admin.mypage.edit_family', ['families_form' => edit_family]);
  //     return view('admin.mypage.edit_family');
      
  //     // Varidationを行う
  //     $this->validate($request, Families::$rules);
  //     $families = new Families;
  //     $form = $request->all();
      
  //     // フォームから送信されてきた_tokenを削除する
  //     unset($form['_token']);

  //     // データベースに保存する
  //     $families->fill($form);
  //     $families->save();
  //   }
    
  //   public function update(Request $request)
  // {
  //     // Validationをかける
  //     $this->validate($request, Families::$rules);
  //     // Families Modelからデータを取得する
  //     $news = Families::find($request->id);
  //     // 送信されてきたフォームデータを格納する
  //     $families_form = $request->all();
  //     unset($families_form['_token']);

  //     // 該当するデータを上書きして保存する
  //     $families->fill($families_form)->save();

  //     return redirect('admin/mypage');
  // }
}
