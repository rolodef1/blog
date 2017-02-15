<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;//AGREGA FUNCIONALIDAD DE SLUGGABLE PARA URLS AMIGABLES

class Article extends Model
{
    use Sluggable;//SE AGREGA PARA FUNCIONALIDAD SLUGGABLE

    //RETORNA UN ARRAY POR MEDIO DEL CUAL SLUGGABLE FUNCIONA
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

	//NOMBRE DE LA TABLA
    protected $table = 'articles';

    //COLUMNAS A OBTENER DESDE LA TABLA
    protected $fillable = ['title','content','category_id','user_id'];

    //RELACION MUCHOS A UNO ENTRE ARTICULOS Y CATEGORIA
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    //RELACION MUCHOS A UNO ENTRE ARTICULOS Y USUARIO
    public function user(){
    	return $this->belongsTo('App\User');
    }

    //RELACION UNO A MUCHOS ENTRE ARTICULO E IMAGENES
    public function images(){
    	return $this->hasMany('App\Image');
    }

    //RELACION MUCHOS A MUCHOS ENTRE ARTICULOS Y TAGS
    public function tags(){
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function scopeSearch($query,$title){
        return $query->where('title','LIKE',"%$title%");
    }
}
