<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'FamilyName' => 'required',
    );
    
    // Userモデルに関連付けを行う
    public function user()
    {
      return $this->hasMany('App\User');

    }
}
