@extends('admin.layouts.app')
@section('content')
<a href="{{ route('testimonal.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add Testimonal</a>
<div class="card card-preview">

    <div class="card-inner">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
        <table class="datatable-init table table-responsive">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonals as $key=>$testimonal)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$testimonal->name}}</td>                   
                    <td>{{$testimonal->designation}}</td>
                    <td>{{$testimonal->sub_title}}</td>
                    <td><img src="{{asset('uploads/testimonal/'.$testimonal->image)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                    <td>
                        <a href="{{route('testimonal.edit',$testimonal->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$testimonal->id}}" action="{{route('testimonal.destroy',$testimonal->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$testimonal->id}}').submit();
                        }else{
                            event.preventDefault();
                        }
                        "><em class="icon ni ni-trash"></em></button>
                    </td>

                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection