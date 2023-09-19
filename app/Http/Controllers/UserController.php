<?php

namespace App\Http\Controllers;

use App\Repository\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getUser()
    {
        return $this->userRepository->get();
    }
    public function detail($id)
    {
        return response()->json([ 'data' => $this->userRepository->detailUser($id)]);
    }
}
