<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function categories(){
        return Category::all();
    }
    public function mainCategories(){
        return Category::where('parent_cat_id' , 2)->get();
    }

}
