<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }

    public function create()
    {
        return view("/back/testimonials/create");
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial;

        $request->validate([
         'fullname'=> 'required',
         'date'=> 'required',
         'sector'=> 'required',
         'rate'=> 'required',
         'testimonial'=> 'required',
         'nickname'=> 'required',
         'position'=> 'required',
        ]);

        $testimonial->fullname = $request->fullname;
        $testimonial->date = $request->date;
        $testimonial->sector = $request->sector;
        $testimonial->rate = $request->rate;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->nickname = $request->nickname;
        $testimonial->position = $request->position;
        $testimonial->save();
        return redirect()->route("testimonials.index")->with('message', "Testimonial bien enregistré !");
    }

    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/show",compact("testimonial"));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }

    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);

        $request->validate([
         'fullname'=> 'required',
         'date'=> 'required',
         'sector'=> 'required',
         'rate'=> 'required',
         'testimonial'=> 'required',
         'nickname'=> 'required',
         'position'=> 'required',
        ]);
        
        $testimonial->fullname = $request->fullname;
        $testimonial->date = $request->date;
        $testimonial->sector = $request->sector;
        $testimonial->rate = $request->rate;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->nickname = $request->nickname;
        $testimonial->position = $request->position;
        $testimonial->save();
        return redirect()->route("testimonial.index")->with('message', "Mis à jour du testimonial $id réalisé avec succès !");
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('message', "Le testimonial $id a bien été supprimé !");
    }
}
