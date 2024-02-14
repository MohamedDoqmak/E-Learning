<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use HasFactory,Translatable;
    protected $guarded = ['id'];
    public $translatedAttributes = ['name'];
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_categories')
            ->withTimestamps();
    }


}
