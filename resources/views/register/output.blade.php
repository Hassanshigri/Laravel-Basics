<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Adress</th>
            <th scope="col">Phone_no</th>
            <th scope="col">Action</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($registered as $item )
            <tr>
                <td> {{$item->name}} </td>
                <td> {{$item->f_name}} </td>
                <td> {{$item->address}} </td>
                <td> {{$item->phone_no}} </td>
                <td> <a href="{{route('edit',$item->id)}}" class="btn btn-success btn-sm">EDIT</a>
                    <a href="{{route('delete',$item->id)}}"class="btn btn-danger btn-sm">Delete</a></td>
              </tr>

            @endforeach


        </tbody>
      </table>
</body>
</html>
