<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion de uno a muchos inversa con la tabla User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos inversa con la tabla Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Relación muchos a muchos con la tabla Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    //Relación 1 - 1 polimorfica con la tabla Image
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
