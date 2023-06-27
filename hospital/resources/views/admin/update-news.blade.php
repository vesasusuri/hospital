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
            <form action="{{ url('editnews', $news->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ $news->description}}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label>Heading</label>
                    <input type="text" name="links" value="{{ $news->links}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Old image</label><br>
                    <img height="150px" width="200px" src="newsimage/{{$news->image}}" alt="" >
                  </div> 
              
                <div class="mb-3">
                    <label>Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Update News</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    @include("admin.js")
  </body>
</html>