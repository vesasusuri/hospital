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
                                    <h4 class="card-title">View all doctor visits</h4>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Gender</th>
                                                    <th>Birthday</th>
                                                    <th>Email</th>
                                                    <th>Reason of the visit</th>
                                                    <th>Date of the Visit</th>
                                                    <th>Got any medecine</th>
                                                </tr>
                                            </thead>
                                            @foreach ($visits as $visit)
                                                <tr>
                                                    <td>{{ $visit->fullName }}</td>
                                                        <td>{{ $visit->gender }}</td>
                                                        <td>{{ $visit->birthday }}</td>
                                                        <td>{{ $visit->email }}</td>
                                                        <td>{{ $visit->visited }}</td>
                                                        <td>{{ $visit->dateVisited }}</td>
                                                        <td>{{ $visit->medicine }}</td>
                                                    </th>
                                                <tr>
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
