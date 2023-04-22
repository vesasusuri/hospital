<!DOCTYPE html>
<html lang="en">

<head>
@include('user.links')

</head>

<body>
@include('layouts.app')

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <div class="page-section">
    <div class="container">
    <div class="card-body" style="margin-top:-80px">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered">
                <tr>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Cancel Appointment</th>
                </tr>
           
              @foreach ($appoint as $appoints)
                    <tr>
                        <td>{{ $appoints->doctor }}</td>
                        <td>{{ $appoints->date }}</td>
                        <td>{{ $appoints->message }}</td>
                        <td>{{ $appoints->status }}</td>

                        <td><a href="{{url('cancel_appoint', $appoints->id)}}" onclick="return cofirm('are u sure to delete this')" class="bt btn-danger" style="padding:4px 20px; border-radius:3px;">Cancel</a></td>
                    </tr>
                @endforeach

                <br>
            </table>
        </div>
        </div>
        </div>

    @include('user.script')
    @include('user.footer')

</body>

</html>
