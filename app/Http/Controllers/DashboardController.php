<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
   $data_dashboard=\App\Dashboard::all();
        
        
        return view('dashboard.index',['data_dashboard' => $data_dashboard]);
    }
}
