<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = ['name','avatar','premiere_date','time_begin','country','country','description'];
}

