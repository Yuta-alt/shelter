<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    // protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'user_id' => 'required',
        'shelter_id' => 'required',
        'comment' => 'required',
        'body_id' => 'required',
    );
    
    public function users()
    {
      return $this->hasMany('App\User');
    }
}
