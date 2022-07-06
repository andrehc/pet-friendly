<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'tb_pets';
    protected $fillable = [
        'name', 'breed', 'about', 'image'
    ];
}
