<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogDetails()
    {
        return view('pages.blog-page');
    }
}
