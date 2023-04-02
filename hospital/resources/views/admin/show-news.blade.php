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
    <div class="card mt-4">
        <div class="card-header ">
        <br>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered">
                <tr>
                    <th>description</th>
                    <th>links</th>
                    <th>image</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach ($news as $newNews)
                    <tr>
                        <td>{{ $newNews->description }}</td>
                        <td>{{ $newNews->links }}</td>
                        <td>
                            <img src="newsimage/{{ $newNews->image }} " alt="img" style="width:120px;height:100px">
                        </td>
                        <td>
                            <a  href="{{ url('update-news', $newNews->id) }}" class="btn btn-success">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deletenews', $newNews->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

    </div>

    @include("admin.js")

  </body>
</html>