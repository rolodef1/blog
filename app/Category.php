<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    //RELACION UNO A MUCHOS ENTRE CATEGORIA Y 
    public function articles(){
    	return $this->hasMany('App\Article');
    }
}
