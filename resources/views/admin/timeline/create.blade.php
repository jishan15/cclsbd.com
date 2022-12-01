@extends('admin.layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Create timeline</span>
           <form action="{{ route('timeline.store') }}" method="POST">
             @csrf
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="year" >
                            <label class="form-label-outlined" for="outlined-normal">Timeline Year</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="date" >
                            <label class="form-label-outlined" for="outlined-normal">Timeline Date</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="title" >
                            <label class="form-label-outlined" for="outlined-normal">Timeline Title</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right xl">
                                <em class="icon ni ni-user"></em>
                            </div>
                           
                            <textarea  cols="5" rows="5" type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon" name="sub_title"></textarea>
                            <label class="form-label-outlined" for="outlined-right-icon">Timeline Sub Title</label>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="row gy-4">
                <div class="col-lg-12">
                    <a href="{{ route('timeline.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection 