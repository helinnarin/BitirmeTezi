<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'desc', 'body', 'image', 'slug', 'order', 'category', 'price', 'stock', 'featured','author_id'];
 
    public function author(){
        return $this->belongsTo(Author::class,'author_id');
    }

    public function getfile()
    {
        return url($this->image);
    }
    
}
