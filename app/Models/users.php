<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class users extends Model
{
    use HasFactory, Notifiable;
    /**
     * @var array
     */
    protected $fillable =[
        'name',
        'email',
        'password'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * @var array
     */
    protected $casts =[
        'email_verified_at' =>'datetime'
    ];
}
