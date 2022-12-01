@extends('admin.layouts.app')
@section('content')
<a href="{{ route('timeline.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add Timeline</a>
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
                    <th>Year</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timelines as $key=>$timeline)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$timeline->year}}</td>
                   
                    <td>{{$timeline->date}}</td>
                    <td>{{$timeline->title}}</td>
                    <td>{{$timeline->sub_title}}</td>
                    <td>
                        <a href="{{route('timeline.edit',$timeline->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$timeline->id}}" action="{{route('timeline.destroy',$timeline->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$timeline->id}}').submit();
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