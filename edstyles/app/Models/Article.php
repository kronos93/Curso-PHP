<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles'; //Propio del ORM
    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size');
    }
    public function getPriceFloatAttribute()
    {
        $price = (float) ($this->attributes['price'] / 100);
        return round($price,2);
    }
}
