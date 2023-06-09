<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['createdAt','name','avatar','quatity,id_type,description'];
}
