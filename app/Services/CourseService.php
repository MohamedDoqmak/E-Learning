<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{
    public function getLatestCourses()
    {
        return Course::latest()->take(6)->get();
    }


}
