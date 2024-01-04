<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['name', 'price', 'description', 'level', 'thumbnail',];

    public $translatable = ['name', 'description', 'level'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'course_categories')
            ->withTimestamps();
    }

    public function translations()
    {
        return $this->hasMany(CourseTranslation::class);
    }
}
