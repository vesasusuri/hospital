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
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Reason of the visit</th>
                    <th>Date of the Visit</th>
                    <th>Got any medecine</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach ($visits as $visit)
                    <tr>
                        <td>{{ $visit->fullName }}</td>
                        <td>{{ $visit->gender }}</td>
                        <td>{{ $visit->birthday }}</td>
                        <td>{{ $visit->email }}</td>
                        <td>{{ $visit->visited }}</td>
                        <td>{{ $visit->dateVisited }}</td>
                        <td>{{ $visit->medicine }}</td>
                        <td>
                            <a  href="{{ url('updateUserVisits', $visit->id) }}" class="btn btn-success">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deleteUserVisits', $visit->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>      
</div>

    </div>

    @include("doctor.js")

  </body>
</html>