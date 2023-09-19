<?php
namespace App\Repository\User\Query;

use App\Models\User;

class DetailUserQuery
{
    public function handle($id)
    {
        return User::findOrFail($id);
    }
}