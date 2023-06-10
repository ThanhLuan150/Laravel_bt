<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
  use HasFactory, Notifiable;

  /**		
   * @var array		
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];


  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**		
   * @var array		
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
}