<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class Product extends Model
{
    use HasFactory;

    protected $guarded  = ['id', 'created_at','updated_at'];
    
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function line()
    {
        return $this->belongsTo(Line::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function nutritions()
    {

        return $this->belongsToMany(Nutrition::class)->withPivot('percentage');
    }

    public function sizes()
    {

        return $this->belongsToMany(Size::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
