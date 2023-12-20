<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public function getAllCategories()
    {
        return Category::all();
    }
    public function getCategoriesTranslations()
    {

        $lang = session('applocale');
        $categories = $this->getAllCategories();
        $translatedCategories = [];

        foreach ($categories as $category) {
            $translation = $category->translations->where('locale', $lang)->first();
            $translatedCategories[] = [
                'translation' => $translation ? $translation->name : null,
                'defult_name' => $category->name,
            ];
        }
        return $translatedCategories;
    }
}
