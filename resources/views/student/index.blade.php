<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>STUDENT FILE</h1>
    <!-- <a href="{{ url ('welcome') }}">Greeting</a>  -->
   
    <a href="{{ route('student_form') }}">STUDENT</a>
    @foreach ($users as $user)
    <h3>{{ $user->id }}</h3>  
    <h3>{{ $user->name }}</h3>
    <h3>{{ $user->email }}</h3>
    @endforeach
</body>

</html>