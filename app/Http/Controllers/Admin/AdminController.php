<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function __construct()
    {
        // return view('admin.home');
         view()->share('adminTheme', 'adminTheme.default');
    }
        
}

    