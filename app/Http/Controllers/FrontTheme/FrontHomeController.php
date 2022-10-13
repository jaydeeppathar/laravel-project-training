<?php

namespace App\Http\Controllers\FrontTheme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Category;
use App\Models\Post;
use App\Models\Blog;

use App\Http\Controllers\FrontTheme\FrontThemeController;

class FrontHomeController extends FrontThemeController
{
    public function home(){
        // return view('frontHome.home');
        $category = Category::get();
        $post = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('frontHome.home', compact('category','post'));
    }

    public function about(){
            return view('frontHome.about');
    }

    public function service(){
        return view('frontHome.service');
    }

    public function contact(){
        return view('frontHome.contact');
    }

    public function shortcodes()
    {
        return view('frontHome.shortcodes');
    }

    public function blog()
    {
        $blog = Blog::get();
        return view('frontHome.blog',compact('blog'));
    }

    // public function carousel(Request $request)
    // {
    //     $student = Student::paginate(5);
    //     return view('student.index', compact('student'));
    // }
}
