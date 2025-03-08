<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage()
    {
        return view('category\foodBeverage');
    }
    public function beautyHealth()
    {
        return view('category\beautyHealth');
    }
    public function homeCare()
    {
        return view('category\homeCare');
    }
    public function babyKid()
    {
        return view('category\babyKid');
    }
}
