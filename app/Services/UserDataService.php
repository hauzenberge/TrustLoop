<?php

namespace App\Services;

use App\Models\UserData;

class UserDataService
{
    public static function create($data)
    {
        $userData =UserData::create($data);
        
        return $userData;
    }

    public static function update(UserData $userData, $data)
    {
        return $userData->update($data);
    }
}
