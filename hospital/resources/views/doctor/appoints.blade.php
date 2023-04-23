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
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Cancel</th>
                </tr>
                @foreach ($data as $appoint)
                    <tr>
                        <td>{{ $appoint->name }}</td>
                        <td>{{ $appoint->email }}</td>
                        <td>{{ $appoint->phone }}</td>
                        <td>{{ $appoint->doctor }}</td>
                        <td>{{ $appoint->date }}</td>
                        <td>{{ $appoint->message }}</td>
                        <td>{{ $appoint->status }}</td>
                       
                        <td>
                            <a href="{{ url('approved', $appoint -> id) }}" class="btn btn-success">Approve</a>
                        </td>
                        <td>
                            <a href="{{ url('canceled', $appoint->id) }}" class="btn btn-danger">Cancel</a>
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