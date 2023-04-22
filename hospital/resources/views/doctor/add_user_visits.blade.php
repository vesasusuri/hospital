
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("doctor.style")

  </head>
  <body>
    <div class="container-scroller">
      @include("doctor.sidebar")
      @include("doctor.navbar")
      <div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h4 class="mt-4">Add Posts</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>  
            @endif

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <form action="{{ url('upload_user_visits')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Full Name:</label>
                    <input type="text" name="fullName" class="form-control" style="color:white" required="">
                </div>
                <div class="mb-3">
                    <label>Gender:</label>
                    <input type="text" name="gender" class="form-control" style="color:white" required="">
                </div>
                
                <div class="mb-3">
                    <label>Birthday:</label>
                    <input type="text" name="birthday" class="form-control" required="">
                </div>

                <div class="mb-3">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" required="">
                </div>

                <div class="mb-3">
                    <label>Whats the reason of the visit:</label>
                    <input type="text" name="visited" class="form-control" required="">
                </div>   
                
                <div class="mb-3">
                    <label>Date of the Visit:</label>
                    <input type="text" name="dateVisited" class="form-control" required="">
                </div>   
                
                <div class="mb-3">
                    <label>They got any medecine ?:</label>
                    <input type="text" name="medicine" class="form-control" required="">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>

    @include("doctor.js")

  </body>
</html>