<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Role;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $roles = Role::all();
        $banners = Banner::all();
        $services = Service::all();
        return view("welcome", compact("roles","banners","services"));
    }
}
