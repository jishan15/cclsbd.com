@extends('admin.layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Edit News for Executive</span>
           <form action="{{route('newtestimonals.update',$newstestimonal->id)}}" method="POST">
             @csrf
             {{-- @method('PUT') --}}
          

            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="number" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="date" value="{{ $newstestimonal->date}}">
                            <label class="form-label-outlined" for="outlined-normal">News for newtestimonals date</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right xl">
                                <em class="icon ni ni-user"></em>
                            </div>
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon" name="month" value="{{ $newstestimonal->month}}">
                            <label class="form-label-outlined" for="outlined-right-icon">News for newtestimonals Month</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="title" value="{{ $newstestimonal->title}}">
                            <label class="form-label-outlined" for="outlined-normal">News for newtestimonals title</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right xl">
                                <em class="icon ni ni-user"></em>
                            </div>
                            <textarea type="text" name="sub_title" cols="5" rows="2" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon">{{ $newstestimonal->sub_title}}</textarea>
                            {{-- <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon" name="sub_title" > --}}
                            <label class="form-label-outlined" for="outlined-right-icon" >News for newtestimonals Sub Title</label>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row gy-4">
                <div class="col-lg-12">
                    <a href="{{ route('newtestimonals.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right" value="Update">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection 