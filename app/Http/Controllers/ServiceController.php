<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }

    public function create()
    {
        return view("/back/services/create");
    }

    public function store(Request $request)
    {
        $service = new Service;

        $request->validate([
        // -------- Ici pas requis sinon va le demander à chaque création de carte alors qu'on veut pas forcément
        //  'description'=> 'required',
        //  'img'=> 'required',

         'cardicon'=> 'required',
         'cardtitle'=> 'required',
         'carddescription'=> 'required',
         'cardbtn'=> 'required',
        ]);

        $service->description = $request->description;
        $service->img = $request->img;
        $service->cardicon = $request->cardicon;
        $service->cardtitle = $request->cardtitle;
        $service->carddescription = $request->carddescription;
        $service->cardbtn = $request->cardbtn;
        $service->save();
        return redirect()->route("service.index")->with('message', "Service enregistré avec succès !");
    }


    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/show",compact("service"));
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view("/back/services/edit",compact("service"));
    }


    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $request->validate([
         'cardicon'=> 'required',
         'cardtitle'=> 'required',
         'carddescription'=> 'required',
         'cardbtn'=> 'required',
        ]);

        $service->description = $request->description;
        $service->img = $request->img;
        $service->cardicon = $request->cardicon;
        $service->cardtitle = $request->cardtitle;
        $service->carddescription = $request->carddescription;
        $service->cardbtn = $request->cardbtn;
        $service->save();
        return redirect()->route("service.index")->with('message', "Service mis à jour avec succès !");
    }


    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Service supprimé avec succès !");
    }
}