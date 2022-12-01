<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsroom;
use App\Models\Contact;
use App\Models\Timeline;
use App\Models\Executive_news;
use App\Models\Timeline_news;
use App\Models\Testimonal_news;



class WelcomeController extends Controller
{
    public function index()
    {
        $newsrooms = Newsroom::latest()->paginate(4);
        return view('welcome',compact('newsrooms'));
    } 
    public function news()
    {
        $newsrooms = Newsroom::all();
        return view('/news',compact('newsrooms'));
    } 

    public function timelines()
    {
        $newstimelines = Timeline_news::all();
        $timelines = Timeline::all();
        return view('/timeline',compact('timelines','newstimelines'));
    } 

    // public function newsTimeline()
    // {
    //     $newstimelines = Timeline_news::all();
    //     return view('/timeline',compact('$newstimelines'));
    // }

    public function executive()
    {
        $executives = Executive_news::all();
        return view('/executive',compact('executives'));
    }

    public function contacts()
    {
        return view('/contact');
    }

    public function testimonials()
    {
        $newstestimonals = Testimonal_news::all();
        return view('/testimonials',compact('newstestimonals'));
    }
    public function contact(Request $request)
   {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','successfully.');
   }
//     public function contact(Request $request)
//    {
//         $this->validate($request,[
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'email' => 'required',
//             'phone' => 'required',
//             'message' => 'required',
//         ]);
//         $contact = new Contact();
//         $contact->first_name = $request->first_name;
//         $contact->last_name = $request->last_name;
//         $contact->email = $request->email;
//         $contact->subject = $request->subject;
//         $contact->message = $request->message;
//         $contact->save();
//         return redirect()->back();
//    }
}
