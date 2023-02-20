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

    public function paginate(){
        return Category::where('id' , '>' , 1)->paginate(20);
    }

    public function find($slug){
        return Category::where('slug' , $slug)->first();
    }
    public function delete($slug){
        try {
            Category::where('slug' , $slug)->delete();
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function create($data){
        try {
            return Category::create($data)->id;
        }catch (QueryException $exception){
            return 0;
        }
    }

    public function update($data , $slug){
        try {
            $category = Category::where('slug' , $slug)->first();
            $category->fill($data);
            $category->save();
            return $category->id;
        }catch (QueryException $exception){
            return 0;
        }
    }
}
