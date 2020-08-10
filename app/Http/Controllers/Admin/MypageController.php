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
      return view('admin.mypage.index');
    }
    
    
    public function edit(Request $request)
    {
      // Family Modelからデータを取得する
      $family = Family::find($request->id);
      return view('admin.mypage.edit');
    }
}
