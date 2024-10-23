<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function AdminLogin()
    {
        return view('admin.login');
    }
    // ENd Method

    function AdminDashboard()
    {
        return view('admin.admin_dashboard');
    }
}
