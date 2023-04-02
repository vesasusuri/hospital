<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include("admin.css")

  </head>
  <body>
    <div class="container-scroller">
      @include("admin.sidebar")
      @include("admin.navbar")
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
            <form action="{{ url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Doctor Name</label>
                    <input type="text" name="name" value="{{ $data->name}}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="number" name="phone" value="{{ $data->phone}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>speciality</label>
                    <input type="text" name="speciality" value="{{ $data->speciality}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Room</label>
                    <input type="number" name="room" value="{{ $data->room}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Old image</label><br>
                    <img height="150px" width="200px" src="doctorimage/{{$data->image}}" alt="" >
                  </div> 
              
                <div class="mb-3">
                    <label>Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Update Doctors</button>
                </div>
            </form>
        </div>
    </div>

</div>
    </div>
    @include("admin.js")

  </body>
</html>