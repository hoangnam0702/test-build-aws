<?php
namespace App\Repository\User;

use App\Repository\User\Query\DetailUserQuery;
use App\Repository\User\Query\UserQuery;

class UserRepository implements UserInterface
{
    public function get()
    {
        return app(UserQuery::class)->handle();
    }

    public function detailUser($id)
    {
        if($id < 10){
            return app(DetailUserQuery::class)->handle($id);
        } else {
            return 'error';
        }
    }
}