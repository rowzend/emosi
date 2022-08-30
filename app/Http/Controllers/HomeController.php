<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'active']);
    }

    public function index()
    {
        if (Auth::user()->type === "super-admin") {

            return redirect()->route('home.superAdmin');
        } elseif (Auth::user()->type === "manager") {

            return redirect()->route('home.manager');
        } else {

            return redirect()->route('home.users');
        }
    }
}
