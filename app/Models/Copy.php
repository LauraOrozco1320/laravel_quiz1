<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    //relacion uno a muchos con book
    public function books(){
        return $this->belongsTo('App\Models\book');
    }

    // relacion muchos a muchos
 public function users(){
    return $this->belongsToMany('App\Models\user');
 }

}
