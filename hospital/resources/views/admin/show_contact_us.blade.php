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
                    <th>name</th>
                    <th>email</th>
                    <th>message</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @foreach ($post as $newPost)
                    <tr>
                        <td>{{ $newPost->name }}</td>
                        <td>{{ $newPost->email }}</td>
                        <td>{{ $newPost->message }}</td>

                        <td>
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-success">Send an email </a>
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deletepost', $newPost->id) }}" class="btn btn-danger">Delete</a>
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