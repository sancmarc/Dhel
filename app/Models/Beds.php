<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beds extends Model
{
    use HasFactory;
    protected $fillable = ['bed_name','bed_image','description','alt_description'];
}
