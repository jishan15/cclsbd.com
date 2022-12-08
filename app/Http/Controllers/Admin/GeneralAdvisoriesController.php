<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GeneralAdvisories;
class GeneralAdvisoriesController extends Controller
{
    public function index()
    {
        $generalAdvisories = GeneralAdvisories::all();
        return view('admin.general_advisories.index',compact('generalAdvisories'));
    }
    public function create()
    {
        return view('admin.general_advisories.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->title);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/general'))
        {
            mkdir('uploads/general',077,true);
        }
        $image->move('uploads/general',$imagename);
       }
       else{
        $imagename = 'default.png';
       }
       $generalAdvisories = new GeneralAdvisories();
       $generalAdvisories->title = $request->title;
       $generalAdvisories->sub_title = $request->sub_title;
       $generalAdvisories->image = $imagename;
       $generalAdvisories->created_at = Carbon::now();
       $generalAdvisories->save();
       return redirect()->route('generalAdvisories.index')->with('success','GEneral advisories Information has been created successfully.');
    }
    public function edit($id)
    {
         $generalAdvisories = GeneralAdvisories::find($id);
         return view('admin.general_advisories.edit',compact('generalAdvisories'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
     
            // 'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->title);
            $generalAdvisories = GeneralAdvisories::find($id);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/general'))
        {
            mkdir('uploads/general',077,true);
        }
        $image->move('uploads/general',$imagename);
       }
       else{
        $imagename = $generalAdvisories->image;
       }
    //    $newsroom = new Newsroom();
       $generalAdvisories->title = $request->title;
       $generalAdvisories->sub_title = $request->sub_title;
       $generalAdvisories->image = $imagename;
       $generalAdvisories->created_at = Carbon::now();
       $generalAdvisories->save();
       return redirect()->route('generalAdvisories.index')->with('success','Genaral advisories Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $generalAdvisorie = GeneralAdvisories::find($id);
         if(file_exists('uploads/general/'.$generalAdvisories->image)){
             unlink('uploads/general/'.$generalAdvisories->image);
         }
         $newsroom->delete();
         return redirect()->route('generalAdvisories.index')->with('success','General Advisories Information Has Been deleted successfully');
    }
}
