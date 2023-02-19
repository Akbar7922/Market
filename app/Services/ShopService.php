<?php

namespace App\Services;

use App\Models\Shop;

class ShopService
{
    public function all(){
        return Shop::where('isDel' , 0)->get();
    }
}
