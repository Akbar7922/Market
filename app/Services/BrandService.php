<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Database\QueryException;

class BrandService
{
    public function all(){
        return Brand::where('id' , '>' , 1)->where('parent_brand_id' , 1)->get();
    }
    public function paginate(){
        return Brand::where('id' , '>' , 1)->paginate(20);
    }
    public function find($slug){
        return Brand::where('slug' , $slug)->first();
    }
    public function delete($slug){
        try {
            Brand::where('slug' , $slug)->delete();
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function create($data){
        try {
            return Brand::create($data)->id;
        }catch (QueryException $exception){
            return 0;
        }
    }

}
