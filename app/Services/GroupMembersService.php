<?php

namespace App\Services;

use App\Models\GroupMember;

class GroupMembersService
{
    public function membersOfGroup($group_id){
        return GroupMember::where('group_id' , $group_id)->get();
    }
}
