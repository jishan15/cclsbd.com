<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Timeline_news;
class NewsTimelineController extends Controller
{
    public function index()
    {
        $newstimelines = Timeline_news::all();
        return view('admin.timelineNews.index',compact('newstimelines'));
    }
    public function create()
    {
        return view('admin.timelineNews.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
            
       $newstimeline = new Timeline_news();
       
       $newstimeline->date = $request->date;
       $newstimeline->month = $request->month;
       $newstimeline->title = $request->title;
       $newstimeline->sub_title = $request->sub_title;
       $newstimeline->save();
       return redirect()->route('newstimeline.index')->with('success','New for timeline Information has been created successfully.');
    }
    public function edit($id)
    {
         $newstimeline = Timeline_news::find($id);
         return view('admin.timelineNews.edit',compact('newstimeline'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            
            'date' => 'required',
            'month' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
       ]);
       $newstimeline = Timeline_news::find($id);
       $newstimeline->date = $request->date;
       $newstimeline->month = $request->month;
       $newstimeline->title = $request->title;
       $newstimeline->sub_title = $request->sub_title;
       $newstimeline->save();
       return redirect()->route('newstimeline.index')->with('success','News for timeline Information has been Updated successfully.');
    }
    public function destroy($id)
    {
         $newstimeline = Timeline_news::find($id);
        
         $newstimeline->delete();
         return redirect()->route('newstimeline.index')->with('success','News for timeline Information Has Been deleted successfully');
    }
}
