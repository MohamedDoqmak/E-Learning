<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'locale', 'description', 'level',];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

}
