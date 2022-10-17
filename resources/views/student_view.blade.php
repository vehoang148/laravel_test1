<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
  .text-left{
    margin-right: 10px;
    float: right;
    margin-top: 10px;
  }
  h3{
    text-align: center;
  }

  .form1{
    width: 40%;
    height: 50%;
    border: 20px;
    background: rgb(9, 255, 0);
    margin-left: 25%;
    border-radius: 5px;
  }
  .form h5{
    padding-left: 20px;
  }
</style>
</head>
<body>
    <div class="text-left" >
        <a href="{{ url('student_manage') }}" class="btn btn-outline-danger">Back to list</a>
      </div>
    <h3>Student details: {{$data->fullname }}</h3>
    <br>
    @csrf
    <form action="" class="form1">
            <h5>ID: {{$data->id}}
            <h5>FULLNAME: {{$data->fullname}}</h5>
            <h5>BIRTHDAY: {{$data->birthday}}</h5>
            <h5>ADDRESS: {{$data->address}}</h5>
            
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>