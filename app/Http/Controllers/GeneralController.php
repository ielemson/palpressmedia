<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    
    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }

    public function services(){
        $services = Service::all();
        return view("services",compact('services'));
    }

    public function ourservice($slug){
        $service = Service::where("slug",$slug)->first();
        return view("service_details",compact('service'));
    }

    public function blogs(){
        return view("blogs");
    }
}
