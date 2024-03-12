<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Create</title>
  </head>
  <body style="background:radial-gradient(#ffffff, #03042c); height:100vh">
       <div class="container">
            <div class="row pt-5">
                <div class="col-6 m-auto py-3 px-5 text-white" style="background-image: linear-gradient(45deg,#32a856,#329ca8)">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Student Create</h2>
                        <a href="{{route('student.list')}}" class="btn btn-sm btn-outline-warning">Student list</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="mb-2">Name :</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="roll" class="mb-2">Roll :</label>
                                <input type="number" name="roll" class="form-control" value="{{old('roll')}}">
                                @if($errors->has('roll'))
                                    <span class="text-danger">{{$errors->first('roll') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="registration" class="mb-2">Registration :</label>
                                <input type="number" name="registration" class="form-control" value="{{old('registration')}}">
                                @if($errors->has('registration'))
                                    <span class="text-danger">{{$errors->first('registration') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-outline-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
