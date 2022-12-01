<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsroom;

class NewsroomController extends Controller
{
    public function index()
    {
        $newsrooms = Newsroom::all();
        return view('admin.newsroom.index',compact('newsrooms'));
    }
    public function create()
    {
        return view('admin.newsroom.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'date' => 'required',
            'month' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->title);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/newsroom'))
        {
            mkdir('uploads/newsroom',077,true);
        }
        $image->move('uploads/newsroom',$imagename);
       }
       else{
        $imagename = 'default.png';
       }
       $newsroom = new Newsroom();
       $newsroom->title = $request->title;
       $newsroom->sub_title = $request->sub_title;
       $newsroom->date = $request->date;
       $newsroom->month = $request->month;
       $newsroom->image = $imagename;
       $newsroom->save();
       return redirect()->route('newsroom.index')->with('success','News Information has been created successfully.');
    }
    public function edit($id)
    {
         $newsroom = Newsroom::find($id);
         return view('admin.newsroom.edit',compact('newsroom'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'date' => 'required',
            'month' => 'required',
            // 'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->title);
            $newsroom = Newsroom::find($id);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/newsroom'))
        {
            mkdir('uploads/newsroom',077,true);
        }
        $image->move('uploads/newsroom',$imagename);
       }
       else{
        $imagename = $newsroom->image;
       }
    //    $newsroom = new Newsroom();
       $newsroom->title = $request->title;
       $newsroom->sub_title = $request->sub_title;
       $newsroom->date = $request->date;
       $newsroom->month = $request->month;
       $newsroom->image = $imagename;
       $newsroom->save();
       return redirect()->route('newsroom.index')->with('success','News Information has been Updated successfully.');
    }


    public function destroy($id)
    {
         $newsroom = Newsroom::find($id);
         if(file_exists('uploads/newsroom/'.$newsroom->image)){
             unlink('uploads/newsroom/'.$newsroom->image);
         }
         $newsroom->delete();
         return redirect()->route('newsroom.index')->with('success','News Information Has Been deleted successfully');
    }


}
