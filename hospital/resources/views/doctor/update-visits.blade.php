<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("doctor.style")

  </head>
  <body>
    <div class="container-scroller">
      @include("doctor.sidebar")
      @include("doctor.navbar")
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
            <form action="{{ url('editUserVisits', $visits->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Full Name:</label>
                    <input type="text" name="description" value="{{ $visits->fullName}}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label>Gender:</label>
                    <input type="text" name="description" value="{{ $visits->gender}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Birthday:</label>
                    <input type="text" name="description" value="{{ $visits->birthday}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email:</label>
                    <input type="text" name="description" value="{{ $visits->email}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Reason of the visit:</label>
                    <input type="text" name="description" value="{{ $visits->visited}}" class="form-control">
                </div>
               
                <div class="mb-3">
                    <label>Date of the Visit:</label>
                    <input type="text" name="description" value="{{ $visits->dateVisited}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Got any medecine:</label>
                    <input type="text" name="description" value="{{ $visits->medicine}}" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Update Doctors</button>
                </div>
            </form>
        </div>
    </div>

</div>
    </div>
    @include("doctor.js")

  </body>
</html>