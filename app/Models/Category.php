<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['name','icon'];
    public $translatable = ['name'];
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_categories')
            ->withTimestamps();
    }

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

}
