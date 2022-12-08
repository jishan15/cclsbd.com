@extends('admin.layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Edit Testimonal</span>
           <form action="{{route('testimonal.update',$testimonal->id)}}" method="POST" enctype="multipart/form-data" >
             @csrf
             {{-- @method('PUT') --}}
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="name" value="{{ $testimonal->name}}">
                            <label class="form-label-outlined" for="outlined-normal">Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="designation" value="{{ $testimonal->designation}}">
                            <label class="form-label-outlined" for="outlined-normal">Designation</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <textarea  cols="5" rows="5" type="Text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="sub_title" >{{ $testimonal->sub_title}}</textarea>
                            <label class="form-label-outlined" for="outlined-normal">Sub Title</label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row gy-4">
               <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label" for="customFileLabel">testimonal Image Upload</label>
                    <img src="{{asset('uploads/testimonal/'.$testimonal->image)}}" style="width: 140px; height:80px;" alt="" srcset="">
                    <div class="form-control-wrap">

                        <div class="custom-file">

                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
               </div>

            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <a href="{{ route('testimonal.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right" value="Update">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection 