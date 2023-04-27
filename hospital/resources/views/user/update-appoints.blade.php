<!DOCTYPE html>
<html lang="en">
  <head>
     @include('user.links')
  </head>
  <body>
  @include('layouts.app')

    <div class="container-scroller">
        <div class="container-fluid px-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="mt-4">Edit Posts</h4>
                </div>

                <div class="card-body">
            
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"> x </button>
                        {{session()->get('message')}}
                    </div>
                @endif 
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>  
                @endif
                <form action="{{ url('editAppoints', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Doctor Name:</label>
                        <input type="text" name="doctor" value="{{ $data->doctor}}" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label>Date:</label>
                        <input type="date" name="date" value="{{ $data->date}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Message:</label>
                        <input type="text" name="message" value="{{ $data->message}}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Update Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
  </body>
</html>