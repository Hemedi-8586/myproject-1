<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Assets/css/bootstrap.min.css')}}">
    <title>@yield('title','Homepage')</title>
</head>
<header>
    <div style="background-color: skyblue;padding: 10px;">
        <h3>Demo_project</h3>
    </div>
</header>
<body>

@if(session('status'))
     <div class="text-succes" style="border: 2px solid blue;background-color:blue;width:fit-content;">{{session('status')}}</div>
@endif
<main>

@yield('content')

</main>
</body>
</html>
