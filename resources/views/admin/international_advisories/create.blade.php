@extends('admin.layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Create International Advisories</span>
           <form action="{{ route('internationalAdvisories.store') }}" method="POST" enctype="multipart/form-data" >
             @csrf
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="title" >
                            <label class="form-label-outlined" for="outlined-normal">International Advisories Title</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right xl">
                                <em class="icon ni ni-user"></em>
                            </div>
                            {{-- <input   name="sub_title"> --}}
                            <textarea type="text" name="sub_title" cols="5" rows="2" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon"></textarea>
                            <label class="form-label-outlined" for="outlined-right-icon">International Advisories Sub Title</label>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="row gy-4">
               <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label" for="customFileLabel">International Advisories File Upload</label>
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
                    <a href="{{ route('internationalAdvisories.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection 