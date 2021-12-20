<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applynow extends Model
{
    use HasFactory;
    protected $table = 'applynow';

    public function customer(){

        return $this->belongsTo(Customer::class);
    }
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
