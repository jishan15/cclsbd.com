<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all();
        return view('admin.timeline.index',compact('timelines'));
    }
    public function create()
    {
        return view('admin.timeline.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'year' => 'required',
            'date' => 'required',
            'title' => 'required',
            'sub_title' => 'required'
        ]);

        $timeline = new Timeline();
        $timeline->year = $request->year;
        $timeline->date = $request->date;
        $timeline->title = $request->title;
        $timeline->sub_title = $request->sub_title;
        $timeline->save();
        return redirect()->route('timeline.index');
    }
    public function edit($id)
    {
         $timeline = Timeline::find($id);
         return view('admin.timeline.edit',compact('timeline'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'year' => 'required',
            'date' => 'required',
            'title' => 'required',
            'sub_title' => 'required'
        ]);

        $timeline =Timeline::find($id);
        $timeline->year = $request->year;
        $timeline->date = $request->date;
        $timeline->title = $request->title;
        $timeline->sub_title = $request->sub_title;
        $timeline->save();
        return redirect()->route('timeline.index');
    }
    public function destroy($id)
    {
        $timeline = Timeline::find($id)->delete();
        return redirect()->route('timeline.index');
    }
}
