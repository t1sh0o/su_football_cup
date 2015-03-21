<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public $fillable = ['user_id', 'title', 'slug', 'body'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
