<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student view</title>
  </head>
  <body style="background:radial-gradient(#ffffff, #03042c); height:100vh">
       <div class="container">
            <div class="row pt-5">
                <div class="col-8 m-auto py-3 px-5 text-white" style="background-image: linear-gradient(45deg,#57c9ba,#bccf46)">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Student Details</h2>
                        <a href="{{route('student.list')}}" class="btn btn-sm btn-outline-primary">Back</a>
                    </div>
                    <table class="table table-responsive text-white">                 
                        <tbody>
                           <tr>
                                <th>Name</th>
                                <th>:</th>
                                <td>{{$st->name}}</td>
                           </tr>
                            <tr>
                                <th>Roll</th>
                                <th>:</th>
                                <td>{{$st->roll}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>:</th>
                                <td>{{$st->registration}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>:</th>
                                <td> 
                                    <span class="badge {{($st->status == 1) ? "bg-success" : "bg-warning"}}">{{($st->status ==1) ? "Active" : "Deactive"}}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <th>:</th>
                                <td>{{date('d F, Y', strtotime($st->created_at))}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <th>:</th>
                                <td>{{($st->created_at != $st->updated_at) ? (date('d F, Y', strtotime($st->updated_at))) : ''}}</td>
                            </tr>
                        </tbody>
                    </table>                 
                </div>
            </div>
       </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
