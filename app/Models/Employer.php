<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'employers';

    protected $fillable = [
        'email',
        'password',
        'contact_person_name',
        'phone_number',
        'name_employer',
        'address_employer',
        'city'

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
