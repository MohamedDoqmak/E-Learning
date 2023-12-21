<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }
    public function getCategoriesData()
    {
        $categories = $this->getAllCategories();

        return $categories->map(function ($category) {
            return [
                'translation' => $this->getTranslation($category),
                'default_name' => $category->name,
                'icon' => $this->getCategoryIcon($category),
            ];
        })->all();
    }
    public function getTranslation($category)
    {
        $currentLocale = session('applocale');
        $translation = $category->translations->where('locale', $currentLocale)->first();
        return $translation ? $translation->name : null;

    }
    public function getCategoryIcon($category)
    {
        return Cache::remember('category_icon' . $category->id, now()->addHours(24),
            function () use ($category) {
                return $category->icon;
            }
        );
    }
}
