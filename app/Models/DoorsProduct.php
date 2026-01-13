<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorsProduct extends Model
{
    use HasFactory;
    protected $fillable = ['door_name','door_image','description','alt_description'];
}
