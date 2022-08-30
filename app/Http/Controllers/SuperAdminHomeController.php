<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'active', 'superAdmin']);
    }

    public function superAdminHome()
    {
        return view('login.superadmin.superAdminHome');
    }
}
