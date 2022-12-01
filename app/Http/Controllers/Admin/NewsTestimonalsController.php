<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonal_news;

class NewsTestimonalsController extends Controller
{
    public function index()
    {
        $newstestimonals = Testimonal_news::all();
        return view('admin.testimonals.index',compact('newstestimonals'));
    }
    public function create()
    {
        return view('admin.testimonals.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
            
       $newstestimonal = new Testimonal_news();
       
       $newstestimonal->date = $request->date;
       $newstestimonal->month = $request->month;
       $newstestimonal->title = $request->title;
       $newstestimonal->sub_title = $request->sub_title;
       $newstestimonal->save();
       return redirect()->route('newtestimonals.index')->with('success','New for testimonals Information has been created successfully.');
    }
    public function edit($id)
    {
         $newstestimonal = Testimonal_news::find($id);
         return view('admin.testimonals.edit',compact('newstestimonal'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
       $newstestimonal = Testimonal_news::find($id);
       $newstestimonal->date = $request->date;
       $newstestimonal->month = $request->month;
       $newstestimonal->title = $request->title;
       $newstestimonal->sub_title = $request->sub_title;
       $newstestimonal->save();
       return redirect()->route('newtestimonals.index')->with('success','News for Testimonals Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $newstestimonal = Testimonal_news::find($id);
        
         $newstestimonal->delete();
         return redirect()->route('newtestimonals.index')->with('success','News for Testimonals Information Has Been deleted successfully');
    }
}
