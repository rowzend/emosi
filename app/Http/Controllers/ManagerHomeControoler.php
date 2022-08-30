<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerHomeControoler extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'active', 'manager']);
    }

    public function managerHome()
    {
        return view('login.admin.adminHome');
    }
}
