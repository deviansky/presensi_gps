<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
  
    protected $table = "Mahasiswa";
    protected $primarykey = "nim";
    
    protected $fillabel = [
        'nim',
        'nama_lengkap',
        'no_hp',
    ];
  
   
    protected $hidden = [
        'password',
        'remember_token',
    ];
  
    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
  }
