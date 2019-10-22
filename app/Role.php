<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
      'name',
    ];
    /*public function admins(){
        return $this->belongsToMany('App\Admin');
    }*/
}
