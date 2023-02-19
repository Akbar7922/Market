<?php

namespace App\Services;

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

}
