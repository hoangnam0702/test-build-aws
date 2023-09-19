<?php
namespace App\Repository\User;

interface UserInterface
{
    public function get();
    public function detailUser($id);
}