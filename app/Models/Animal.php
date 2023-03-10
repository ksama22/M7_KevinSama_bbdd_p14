<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'day', 'month', 'description'];

    protected static function newFactory()
    {
        return \Database\Factories\AnimalFactory::new();
    }
    //protected $hidden =[];
}
