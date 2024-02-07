<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class HomeController extends Controller
{

    public function index()
    {
        $categoriesData =Category::all();
        $coursesData = Course::all();
        // both Category::all(); and Course::all(); should be removed and refactored
        return view('index', [
            'categoriesData' => $categoriesData,
            'coursesData' => $coursesData,
        ]);
    }
}
