<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chairs extends Model
{
    use HasFactory;
    protected $fillable = ['chair_name','chair_image','description','alt_description'];
}
