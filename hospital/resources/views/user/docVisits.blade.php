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
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Reason of the visit</th>
                    <th>Date of the Visit</th>
                    <th>Got any medecine</th>
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
                    </tr>
                @endforeach
            </table>
        </div>
        </div>
        </div>

    @include('user.script')
    @include('user.footer')

</body>

</html>
