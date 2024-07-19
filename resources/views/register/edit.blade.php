<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-left: 25%">

    <form action="{{route('store')}}" method="POST">
        @csrf
        <br>
        <div class="form-group col-6">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" value="{{$edit->name}}" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">F_Name</label>
            <input type="text" class="form-control" name="f_name" value="{{$edit->f_name}}" aria-describedby="emailHelp" placeholder="Enter f_name">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" name="address" value="{{$edit->address}}" aria-describedby="emailHelp" placeholder="Enter address">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail1">Phobe_no</label>
            <input type="number" class="form-control" name="phone_no" value="{{$edit->pone_no}}" aria-describedby="emailHelp" placeholder="Enter phone_no">
          </div><br>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>
</body>
</html>
