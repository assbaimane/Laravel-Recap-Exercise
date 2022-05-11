<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $roles = Role::all();
        $banners = Banner::all();
        return view("welcome", compact("roles","banners"));
    }
}
