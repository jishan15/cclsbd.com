<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Executive_news;

class NewsExecutiveController extends Controller
{
    public function index()
    {
        $executives = Executive_news::all();
        return view('admin.executive.index',compact('executives'));
    }
    public function create()
    {
        return view('admin.executive.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
            
       $executive = new Executive_news();
       
       $executive->date = $request->date;
       $executive->month = $request->month;
       $executive->title = $request->title;
       $executive->sub_title = $request->sub_title;
       $executive->save();
       return redirect()->route('executive.index')->with('success','New for executive Information has been created successfully.');
    }
    public function edit($id)
    {
         $executive = Executive_news::find($id);
         return view('admin.executive.edit',compact('executive'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
       $executive = Executive_news::find($id);
       $executive->date = $request->date;
       $executive->month = $request->month;
       $executive->title = $request->title;
       $executive->sub_title = $request->sub_title;
       $executive->save();
       return redirect()->route('executive.index')->with('success','News for executive Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $executive = Executive_news::find($id);
        
         $executive->delete();
         return redirect()->route('executive.index')->with('success','News for executive Information Has Been deleted successfully');
    }
}
