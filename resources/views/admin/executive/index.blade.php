@extends('admin.layouts.app')
@section('content')
<a href="{{ route('executive.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add News For Executive</a>
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
                    <th>Date</th>
                    <th>Month</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($executives as $key=>$executive)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$executive->date}}</td>
                    <td>{{$executive->month}}</td>
                    <td>{{$executive->title}}</td>                   
                    <td>{{$executive->sub_title}}</td>
                    <td>
                        <a href="{{route('executive.edit',$executive->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$executive->id}}" action="{{route('executive.destroy',$executive->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$executive->id}}').submit();
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