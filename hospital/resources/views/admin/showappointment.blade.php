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
                                        <h4 class="card-title">View all appointments</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
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
                                            </thead>
                                        
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
                                                        <div class="badge badge-outline-success"> <a href="{{ url('approved', $appoint -> id) }}" style="color:green; text-decoration:none;">Approve</a></div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-outline-danger"> <a href="{{ url('canceled', $appoint->id) }}" style="color:red; text-decoration:none;">Cancel</a></div>
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