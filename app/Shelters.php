<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelters extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'place' => 'required',
        'address' => 'required',
        'tel' => '',
        'URL' => '',
    );
}
