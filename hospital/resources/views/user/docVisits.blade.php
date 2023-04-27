<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.links')
</head>

<body>
    @include('layouts.app')
    <div class="back-to-top"></div>
    <div class="page-section">
    <div class="container">
    <div class="card-body" style="margin-top:-80px" >
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered" style="overflow-x:scroll;">
                <thead>
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Email</th>
                    <th scope="col">Reason of the visit</th>
                    <th scope="col">Date of the Visit</th>
                    <th scope="col">Got any medecine</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($visits as $visit)
                    <tr>
                         <th scope="row">{{ $visit->fullName }}</th>
                            <td>{{ $visit->gender }}</td>
                            <td>{{ $visit->birthday }}</td>
                            <td>{{ $visit->email }}</td>
                            <td>{{ $visit->visited }}</td>
                            <td>{{ $visit->dateVisited }}</td>
                            <td>{{ $visit->medicine }}</td>
                         </th>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>

    @include('user.script')
    @include('user.footer')

</body>

</html>
