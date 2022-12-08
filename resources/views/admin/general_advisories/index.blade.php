@extends('admin.layouts.app')
@section('content')
<a href="{{ route('generalAdvisories.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add General Advisories</a>
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
                @foreach ($generalAdvisories as $key=>$generalAdvisories)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$generalAdvisories->title}}</td>
                   
                    <td>{{$generalAdvisories->sub_title}}</td>
                   
                    <td><img src="{{asset('uploads/general/'.$generalAdvisories->image)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                     <td>{{$generalAdvisories->created_at()}}</td>
                    <td>
                        <a href="{{route('generalAdvisories.edit',$generalAdvisories->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$generalAdvisories->id}}" action="{{route('generalAdvisories.destroy',$generalAdvisories->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$generalAdvisories->id}}').submit();
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