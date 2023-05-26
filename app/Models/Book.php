<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'desc', 'body', 'image', 'slug', 'order', 'category', 'price', 'stock', 'featured'];


    public function getfile()
    {
        return url($this->image);
    }
}
