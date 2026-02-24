<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //field yang boleh diisi
    protected $fillable = ['name', 'price', 'stock', 'image'];
}
