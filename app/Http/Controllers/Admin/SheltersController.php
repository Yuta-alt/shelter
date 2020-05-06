<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shelters;

class SheltersController extends Controller
{
    public function add()
    {
        return view('admin.shelter.create');
    }
    
    public function index(Request $request)
    {
      $cond_place = $request->cond_place;
      if ($cond_place != '') {
          // 検索されたら検索結果を取得する
          $posts = Shelters::where('place', $cond_place)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Shelters::all();
      }
      return view('admin.shelter.index', ['posts' => $posts, 'cond_place' => $cond_place]);
    }
    
    public function create(Request $request)
    {
        
        // 以下を追記
      // Varidationを行う
      $this->validate($request, Shelters::$rules);

      $shelter = new Shelters;
      $form = $request->all();
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);

      // データベースに保存する
      $shelter->fill($form);
      $shelter->save();
      
    // admin/shelter/createにリダイレクトする
    return redirect('admin/shelter/create');
    }
    
    public function edit(Request $request)
    {
      // Shelters Modelからデータを取得する
      $shelter = Shelters::find($request->id);
      if (empty($shelter)) {
        abort(404);    
      }
      return view('admin.shelter.edit', ['shelter_form' => $shelter]);
    }
    
    public function delete(Request $request)
    {
      // 該当するTop Modelを取得
      $shelter = Shelters::find($request->id);
      // 削除する
      $shelter->delete();
      return redirect('admin/shelter/');
    }
}
