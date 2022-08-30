<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'active', 'users']);
    }

    public function userHome()
    {
        return view('login.user.home');
    }
}
