<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChandelierProduct extends Model
{
    use HasFactory;
    protected $fillable = ['chandelier_name','chandelier_image','description','alt_description'];
}
