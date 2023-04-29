<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.links')
</head>
<body>
    @include('layouts.app')
    <div class="container-scroller">
            <div class="container-fluid px-4">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif  

                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title">View all appointments</h4>
                                        <br>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Doctor Name</th>
                                                    <th>Date</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                    <th>Update Appointment</th>
                                                    <th>Cancel Appointment</th>
                                                </tr>
                                            </thead>
                                        
                                            @foreach ($appoint as $appoints)
                                                <tr>
                                                    <td>{{ $appoints->doctor }}</td>
                                                    <td>{{ $appoints->date }}</td>
                                                    <td>{{ $appoints->message }}</td>
                                                    <td>{{ $appoints->status }}</td>
                                                    <td>
                                                        <a  href="{{ url('update-appointments', $appoints->id) }}" class="btn btn-success">Update</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('cancel_appoint', $appoints->id)}}" onclick="return cofirm('are u sure to delete this')" class="btn btn-danger">Cancel</a>
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
            <br><br>
    @include('user.script')
    @include('user.footer')
</body>
</html>