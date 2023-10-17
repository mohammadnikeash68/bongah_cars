<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','color','city_plak'];
     

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
