<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'introtext', 'smalltext', 'text'];

    public $timestamps = false;
}
