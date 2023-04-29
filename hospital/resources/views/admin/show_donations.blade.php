<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.css")
<style>
    body{
        overflow:visible;
    }
</style>
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
                                        <h4 class="card-title">Order Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>image</th>
                                                    <th>Heading</th>
                                                    <th>Autor</th>
                                                    <th style="width:10em;">Description</th>
                                                    <th>Raised Money</th>
                                                    <th>Goal Money</th>
                                                    <th>Cancel</th>
                                                </tr>
                                            </thead>
                                        
                                            @foreach ($donate as $donation)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="donateimage/{{ $donation->image }} " alt="img" style="width:120px;height:100px">
                                                    </td>
                                                    <td> {{ $donation->heading }} </td>
                                                    <td> {{ $donation->autor }} </td>
                                                    <td> {{ $donation->description }}</td>
                                                    <td> {{ $donation->raisedMoney }} </td>
                                                    <td> {{ $donation->goalMoney }} </td>
                                                    <td>
                                                    <div class="badge badge-outline-danger"> 
                                                        <a href="{{ url('canceled', $donation->id) }}" style="color:red; text-decoration:none;">Cancel</a>
                                                    </div>
                                                    </td>
                                                </tr>   
                                            </tbody>
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