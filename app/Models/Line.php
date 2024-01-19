<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Line extends Model
{
    use HasFactory;
    const BORRADOR=1;
    const PUBLICADO=2;

    protected $guarded  = ['id', 'created_at','updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        return isset($this->images[0]) ?  $this->images[0]->url : 'landing/img/404-picture-not-found.jpg';
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
