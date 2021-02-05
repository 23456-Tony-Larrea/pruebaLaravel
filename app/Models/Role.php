<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function People(){
        return $this-> hasMany(People::class);
    }
    public  $fillable = [
        'description'
    ];
}
