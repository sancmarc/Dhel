<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaillingsProduct extends Model
{
    use HasFactory;
    protected $fillable = ['rail_name','rail_image','description','alt_description'];
}
