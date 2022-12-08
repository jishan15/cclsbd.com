@extends('admin.layouts.app')
@section('content')
<a href="{{ route('internationalAdvisories.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add International Advisories</a>
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
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($internationalAdvisories as $key=>$internationalAdvisories)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$internationalAdvisories->title}}</td>
                   
                    <td>{{$internationalAdvisories->sub_title}}</td>
                   
                    <td><img src="{{asset('uploads/international/'.$internationalAdvisories->image)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                     <td>{{$internationalAdvisories->created_at}}</td>
                    <td>
                        <a href="{{route('internationalAdvisories.edit',$internationalAdvisories->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$internationalAdvisories->id}}" action="{{route('internationalAdvisories.destroy',$internationalAdvisories->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$internationalAdvisories->id}}').submit();
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