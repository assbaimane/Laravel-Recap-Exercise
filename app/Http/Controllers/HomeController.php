<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Role;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $roles = Role::all();
        $banners = Banner::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view("welcome", compact("roles","banners","services","testimonials"));
    }
}
