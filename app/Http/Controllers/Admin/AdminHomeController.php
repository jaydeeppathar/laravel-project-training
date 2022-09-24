<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Post;
use App\Models\User;

class AdminHomeController extends AdminController
{
    public function index()
    {

        $count = Information::count();
        $user = User::count();
        $post = Post::count();
        return view('admin.home', compact('count','post','user'));
        // return view('admin.home');
    }
}
