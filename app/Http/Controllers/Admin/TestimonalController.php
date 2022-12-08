<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonalController extends Controller
{
    public function index()
    {
        $testimonals = Testimonials::all();
        return view('admin.testimonal.index',compact('testimonals'));
    }
    public function create()
    {
        return view('admin.testimonal.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->name);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/testimonal'))
        {
            mkdir('uploads/testimonal',077,true);
        }
        $image->move('uploads/testimonal',$imagename);
       }
       else{
        $imagename = 'default.png';
       }
       $testimonal = new Testimonials();
       $testimonal->name = $request->name;
       $testimonal->designation = $request->designation;
       $testimonal->sub_title = $request->sub_title;
       $testimonal->image = $imagename;
       $testimonal->save();
       return redirect()->route('testimonal.index')->with('success','Testimonals Information has been created successfully.');
    }
    public function edit($id)
    {
         $testimonal = Testimonials::find($id);
         return view('admin.testimonal.edit',compact('testimonal'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'sub_title' => 'required',
            // 'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->name);
            $testimonal = Testimonials::find($id);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/testimonal'))
        {
            mkdir('uploads/testimonal',077,true);
        }
        $image->move('uploads/testimonal',$imagename);
       }
       else{
        $imagename = $testimonal->image;
       }
    //    $testimonal = new Newsroom();
       $testimonal->name = $request->name;
       $testimonal->designation = $request->designation;
       $testimonal->sub_title = $request->sub_title;
       $testimonal->image = $imagename;
       $testimonal->save();
       return redirect()->route('testimonal.index')->with('success','Testimonals Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $testimonal = Testimonials::find($id);
         if(file_exists('uploads/testimonal/'.$testimonal->image)){
             unlink('uploads/testimonal/'.$testimonal->image);
         }
         $testimonal->delete();
         return redirect()->route('testimonal.index')->with('success','Testimonals Information Has Been deleted successfully');
    }
}
