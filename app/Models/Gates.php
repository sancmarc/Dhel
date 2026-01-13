<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gates extends Model
{
    use HasFactory;
    protected $fillable = ['gate_name','gate_image','description','alt_description'];
}
