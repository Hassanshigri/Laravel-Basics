<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome page</h1>
    <a href="/about"><strong>About</strong></a> <br>
    <a href="/user"><strong>User</strong></a> <br>

<form action="{{URL::to('save_data')}}" method="post">
<input type="text"placeholder="Name">
<button>Submit</button>
</form>

</body>
</html>
