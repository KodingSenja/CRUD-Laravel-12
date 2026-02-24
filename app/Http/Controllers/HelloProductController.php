<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloProductController extends Controller
{
    public function index()
    {
        return view('hello_product');
    }   
}
