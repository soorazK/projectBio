<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    public $table = "branch";
    protected $fillable = [
      'branch_name','location'
    ];
}
