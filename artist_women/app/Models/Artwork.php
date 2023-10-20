<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $table = 'artworks';
    public $timestamps = false;
    use HasFactory;
}
