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
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif  

                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                        <br><br><br><br>
                                        <h4 class="card-title">Order Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th>image</th>
                                                <th>links</th>
                                                <th>description</th>
                                                <th>update</th>
                                                <th>delete</th>
                                                </tr>
                                            </thead>
                                        
                                            @foreach ($news as $newNews)
                                                <tr>
                                                    <td>
                                                        <img src="newsimage/{{ $newNews->image }} " alt="img" style="width:120px;height:100px">
                                                    </td>
                                                    <td>{{ $newNews->description }}</td>
                                                    <td>{{ $newNews->links }}</td>
                                                    <td>
                                                    <div class="badge badge-outline-success"> <a  href="{{ url('update-news', $newNews->id) }}" style="color:green; text-decoration:none;">Update</a></div>
                                                    </td>
                                                    <td>
                                                    <div class="badge badge-outline-danger">  <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deletenews', $newNews->id) }}" style="color:red; text-decoration:none;">Delete</a></div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @include("admin.js")

  </body>
</html>