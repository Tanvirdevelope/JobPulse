<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactDetails()
    {
        return view('pages.contact-page');
    }
}
