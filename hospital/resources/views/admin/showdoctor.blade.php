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
            <h4>View Posts
                <a href="{{ url('admin/add-posts') }}" class="btn btn-primary btn-sm float-end">Add Posts</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered">
                <tr>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Specility</th>
                    <th>Room Number</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach ($data as $doctor)
                    <tr>
                        <td style="color:white">{{ $doctor->name }}</td>
                        <td style="color:white">{{ $doctor->phone }}</td>
                        <td style="color:white">{{ $doctor->speciality }}</td>
                        <td style="color:white">{{ $doctor->room }}</td>
                        <td>
                            <img src="doctorimage/{{ $doctor->image }} " alt="img" style="width:120px;height:100px">
                        </td>
                        <td>
                            <a  href="{{ url('updatedoctor', $doctor->id) }}" class="btn btn-success">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deletedoctor', $doctor->id) }}" class="btn btn-danger">Delete</a>
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