
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.css")

  </head>
  <body>
    <div class="container-scroller">
      @include("admin.sidebar")
      @include("admin.navbar")
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
            <form action="{{ url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Doctor Name:</label>
                    <input type="text" name="name" class="form-control" style="color:white" required="">
                </div>
                <div class="mb-3">
                    <label>Phone Number:</label>
                    <input type="number" name="number" class="form-control" style="color:white" required="">
                </div>
                <div class="mb-3">
                    <label>Speciality:</label>
                    <select name="speciality" required="">
                        <option >-- Select --</option>
                        <option value="neurologists">Neurologists</option>
                        <option value="internists">Internists</option>
                        <option value="gynecologists">Gynecologists</option>
                        <option value="physicians">Physicians</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Room Number:</label>
                    <input type="text" name="room" class="form-control" style="color:white" required="">
                </div>

                <div class="mb-3">
                    <label>Doctor Image:</label>
                    <input type="file" name="file" class="form-control" required="">
                </div>
    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>

    @include("admin.js")

  </body>
</html>