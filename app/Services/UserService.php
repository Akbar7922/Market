<?php

namespace App\Services;

use App\Services\CityService;
use App\Models\User;
use Illuminate\Database\QueryException;

class UserService
{
    public function create($data)
    {
        try {
            User::create($data);
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function update($id , $data){
        try {
            User::where('id' , $id)->update($data);
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function checkExistsMobile($mobile) {
        return User::where('mobile' , $mobile)->exists();
    }

    public function all(){
        return User::where('isDel' , 0)->paginate(15);
    }

    public function find($user_id){
        return User::findOrFail($user_id);
    }

    public function deleteAddress($user , $request)
    {
        $position = $request->position;
        $address = json_decode($user->addresses, true);
        unset($address[$position]);
        return $this->updateAddress($user->id, json_encode($address));
    }

    public function addAddress($user, $request)
    {
        $cityService = new CityService();
        $data = [
            'title' => $request->title,
            'city_id' => $request->city_id,
            'city' => $cityService->getName($request->city_id),
            'state_id' => $request->state_id,
            'state' => $cityService->getName($request->state_id),
            'postalCode' => $request->postalCode,
            'address' => $request->address,
            'isSelect' => 0,
        ];

        $address = json_decode($user->addresses, true);
        $address[] = $data;
        return $this->updateAddress($user->id, json_encode($address));
    }

    public function updateUserAddress($user, $request)
    {
        $cityService = new CityService();
        $data = [
            'title' => $request->title,
            'city_id' => $request->city_id,
            'city' => $cityService->getName($request->city_id),
            'state_id' => $request->state_id,
            'state' => $cityService->getName($request->state_id),
            'postalCode' => $request->postalCode,
            'address' => $request->address,
            'isSelect' => 0,
        ];

        $address = json_decode($user->addresses, true);
        $address[$request->position] = $data;
        return $this->updateAddress($user->id, json_encode($address));
    }

    public function updateAddress($user_id , $address){
        try {
            User::where('id' , $user_id)->update(['addresses' => $address]);
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function deleteByMobile($mobile){
        try {
            User::where('mobile' , $mobile)->update(['isDel' => 1]);
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }

    public function updateAvatar($user_id , $avatar){
        try {
            User::where('id' , $user_id)->update(['pic' => $avatar]);
            return true;
        }catch (QueryException $exception){
            return false;
        }
    }
}
