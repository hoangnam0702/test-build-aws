<?php
namespace App\Repository\User\Query;

use App\Models\User;

class UserQuery
{
    public function handle()
    {
        return User::paginate(1);
    }
}