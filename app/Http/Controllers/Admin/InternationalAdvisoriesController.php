<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\International_advisories;

class InternationalAdvisoriesController extends Controller
{
    public function index()
    {
        $internationalAdvisories = International_advisories::all();
        return view('admin.international_advisories.index',compact('internationalAdvisories'));
    }
    public function create()
    {
        return view('admin.international_advisories.create');
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
        if(!file_exists('uploads/international'))
        {
            mkdir('uploads/international',077,true);
        }
        $image->move('uploads/international',$imagename);
       }
       else{
        $imagename = 'default.png';
       }
       $internationalAdvisories = new International_advisories();
       $internationalAdvisories->title = $request->title;
       $internationalAdvisories->sub_title = $request->sub_title;
       $internationalAdvisories->image = $imagename;
       $internationalAdvisories->created_at = Carbon::now();
       $internationalAdvisories->save();
       return redirect()->route('internationalAdvisories.index')->with('success','International advisories Information has been created successfully.');
    }
    public function edit($id)
    {
         $internationalAdvisories = International_advisories::find($id);
         return view('admin.international_advisories.edit',compact('internationalAdvisories'));
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
            $internationalAdvisories = International_advisories::find($id);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/international'))
        {
            mkdir('uploads/international',077,true);
        }
        $image->move('uploads/international',$imagename);
       }
       else{
        $imagename = $internationalAdvisories->image;
       }
    //    $newsroom = new Newsroom();
       $internationalAdvisories->title = $request->title;
       $internationalAdvisories->sub_title = $request->sub_title;
       $internationalAdvisories->image = $imagename;
       $internationalAdvisories->created_at = Carbon::now();
       $internationalAdvisories->save();
       return redirect()->route('internationalAdvisories.index')->with('success','International advisories Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $generalAdvisorie = International_advisories::find($id);
         if(file_exists('uploads/international/'.$internationalAdvisories->image)){
             unlink('uploads/international/'.$internationalAdvisories->image);
         }
         $newsroom->delete();
         return redirect()->route('internationalAdvisories.index')->with('success','International Advisories Information Has Been deleted successfully');
    }
}
