<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all", compact("banners"));
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit", compact("banner"));
    }

    public function update($id, Request $request)
    {
        $banner = Banner::find($id);

        $request->validate([
         'description'=> 'required',
         'btn1'=> 'required',
         'btn2'=> 'required',
         'img'=> 'required'
        ]); 

        $banner->description = $request->description;
        $banner->btn1 = $request->btn1;
        $banner->btn2 = $request->btn2;
        $banner->img = $request->img;
        $banner->save();
        return redirect()->route("banner.index")->with('message', "L'élement de bannière a été mis à jour correctement !");
    }
}
