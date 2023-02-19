<?php

namespace App\Services;

use App\Models\Advertising;
use Carbon\Carbon;

class AdvertisingService
{
    public function activeAdvertising(){
        $today = Carbon::now()->toDateTimeString();
        return Advertising::query()->where('start_date' , '<' , $today)
            ->where('end_date' , '>' , $today)->get();
    }
}
