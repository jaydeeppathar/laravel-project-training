<?php

namespace App\Http\Controllers\FrontTheme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Carousel;

use App\Http\Controllers\FrontTheme\FrontThemeController;

class FrontHomeController extends FrontThemeController
{
    public function home(){
        // return view('frontHome.home');
        $carousel = Carousel::get();
        return view('frontHome.home', compact('carousel'));
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

    // public function carousel(Request $request)
    // {
    //     $student = Student::paginate(5);
    //     return view('student.index', compact('student'));
    // }
}
