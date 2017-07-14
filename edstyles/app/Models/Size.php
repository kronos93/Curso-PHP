<?php
namespace App\Models;

namespace Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes'; //Propio del ORM

    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size');
    }
}
