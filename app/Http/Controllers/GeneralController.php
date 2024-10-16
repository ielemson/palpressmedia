<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    public function index(){
        $teamMembers = TeamMember::all();
        $blogs = Blog::where("status",1)->get();
        $services = Service::all();
        return view("welcome",compact("teamMembers","blogs","services"));
    }
    
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
        $services = Service::all();
        return view("service_details",compact('service','services'));
    }

    public function ourblogs(){
        $blogs = Blog::where("status",1)->get();
        return view("blogs",compact("blogs"));
    }
    public function blog_details($slug){
        $blog = Blog::where("slug",$slug)->first();
        $blogs = Blog::where("status",1)->get();
        return view("blog_details",compact("blog","blogs"));
    }


    public function contactSubmit(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle the submission logic (like saving to DB or sending an email)
        
        return response()->json([
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }
}
