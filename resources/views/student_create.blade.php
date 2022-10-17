<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
                <h2>Add Student</h2><hr>
                
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                    </div>    
                @endif

            </div>
            <form action="{{url('student_save')}}" method="post">
                @csrf
                <div class="md-3">
                    <label for="" class="form-label">FullName</label>
                    <input type="text" value="{{old('fullname')}}" name="fullname" class="form-control">
                </div><br>
                <div class="md-3">
                    <label for="" class="form-label">Birthday</label>
                    <input type="date" value="{{old('birthday')}}" name="birthday" class="form-control">
                </div><br>
                <div class="md-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" value="{{old('address')}}" name="address" class="form-control">
                </div>
                <br>
             <button value="submit" class="btn btn-primary">Save</button>
             <a href="{{url('student_manage')}}" class="btn btn-warning">Exit</a>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
    
</body>
</html>