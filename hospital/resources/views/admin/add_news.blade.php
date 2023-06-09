
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
            <form action="{{ url('upload_news')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control" style="color:white" required="">
                </div>
                <div class="mb-3">
                    <label>Headline</label>
                    <input type="text" name="links" class="form-control" style="color:white" required="">
                </div>
                
                <div class="mb-3">
                    <label>Image:</label>
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