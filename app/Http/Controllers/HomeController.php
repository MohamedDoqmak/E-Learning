<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\CourseService;

class HomeController extends Controller
{
    protected $categoryService;
    protected $courseService;

    public function __construct(CategoryService $categoryService, CourseService $courseService)
    {
        $this->categoryService = $categoryService;
        $this->courseService = $courseService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('index', [
            'categories' => $categories,
        ]);
    }
}
