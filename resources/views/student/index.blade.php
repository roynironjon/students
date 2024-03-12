<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student List</title>
  </head>
  <body style="background:radial-gradient(#ffffff, #03042c); height:100vh">
       <div class="container">
            <div class="row pt-5">
                <div class="col-10 m-auto py-3 px-5 text-white" style="background-image: linear-gradient(45deg,#bccf46, #57c9ba)">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Student List</h2>
                        <a href="{{route('student.create')}}" class="btn btn-sm btn-outline-secondary">Add Student</a>
                    </div>
                    <table class="table table-responsive text-white">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Registration</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key=>$st)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$st->name}}</td>
                                    <td>{{$st->roll}}</td>
                                    <td>{{$st->registration}}</td>
                                    <td> 
                                        <span class="badge {{($st->status ==1) ? "bg-success" : "bg-warning"}}">{{($st->status ==1) ? "Active" : "Deactive"}}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{route('student.view',$st->id)}}" class="btn btn-info btn-sm">view</a>
                                            <a href="{{route('student.edit',$st->id)}}" class="btn btn-primary btn-sm mx-2">Edit</a>
                                            <a href="{{route('student.delete',$st->id)}}" class="btn btn-danger btn-sm mx-2">Delete</a>
                                            <a href="{{route('student.status',$st->id)}}" class="btn {{($st->status ==1) ? "bg-warning" : "bg-success"}} btn-sm mx-2">{{($st->status ==1) ? "Deactive" : "Active"}}</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>                 
                </div>
            </div>
       </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
