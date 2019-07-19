<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    //
    public $table = "shift";
    protected $fillable = [
      'shift_name','start_time','end_time'
    ];
}
