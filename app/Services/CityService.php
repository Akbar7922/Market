<?php

namespace App\Services;

use App\Models\City;

class CityService
{
    public function getStates(){
        return City::where('parent_id' , 1)->where('id' ,'>' , 1)->get();
    }

    public function getCities($state_id){
        return City::where('parent_id' , $state_id)->get();
    }

    public function getName($id){
        return City::findOrFail($id)->name;
    }
}
