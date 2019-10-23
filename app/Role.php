<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
      'name',
    ];
    //relation with permission......
    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }


    public function admins(){
        return $this->belongsToMany('App\Admin');
    }
}
