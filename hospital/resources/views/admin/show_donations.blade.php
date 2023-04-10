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
                    <th>image</th>
                    <th>Heading</th>
                    <th>Autor</th>
                    <th>Description</th>
                    <th>Raised Money</th>
                    <th>Goal Money</th>
                    <th>Cancel</th>
                </tr>
                @foreach ($donate as $donation)
                    <tr>
                        <td>
                            <img src="donateimage/{{ $donation->image }} " alt="img" style="width:120px;height:100px">
                        </td>
                        <td>{{ $donation->heading }}</td>
                        <td>{{ $donation->autor }}</td>
                        <td>{{ $donation->description }}</td>
                        <td>{{ $donation->raisedMoney }}</td>
                        <td>{{ $donation->goalMoney }}</td>
                        <td>
                            <a href="{{ url('canceled', $donation->id) }}" class="btn btn-danger">Cancel</a>
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