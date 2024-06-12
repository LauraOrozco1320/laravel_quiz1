<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   
    //relacion uno a muchos 
    public function copies(){
        return $this->hasMany('App\Models\copy');
}
}