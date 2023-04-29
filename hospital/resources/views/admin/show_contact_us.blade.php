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
                                        <h4 class="card-title">Contact Us</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>message</th>
                                                    <th>update</th>
                                                    <th>delete</th>
                                                </tr>
                                            </thead>
                                        
                                            @foreach ($post as $newPost)
                                                <tr>
                                                    <td>{{ $newPost->name }}</td>
                                                    <td>{{ $newPost->email }}</td>
                                                    <td>{{ $newPost->message }}</td>

                                                    <td>
                                                        <div class="badge badge-outline-success"><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" style="color:green; text-decoration:none;" >Send an email </a></div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-outline-danger"> <a onclick="return confirm('are you sure you want to delete this?')" href="{{ url('deletepost', $newPost->id) }}" style="color:red; text-decoration:none;">Delete</a></div>
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