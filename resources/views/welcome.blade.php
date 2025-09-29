<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page in Laravel</title>
</head>
<body>
    <h1>Our First Page</h1>
    {{ 7+3}}
    <br />
    <br />

    {{"Hello World"}} <br />
    {!!"<h1>Hello World</h1>"!!}

    {{-- {!!"<script>alert('Hello World')</script>"!!} --}}

    @php 
        $user = "Yahoo Baba";
        $names = ["Salman khan","Saurabh Pandey","Shreyash Srivastava","Avinash Sharma"];
        
    @endphp
    <ul> 
    @foreach ($names as  $name)
    @if ($loop->first)
        <li style="color:red">  {{$name}}</li>
    @else
        <li>  - {{$name}}</li>    
    @endif
        <li> - {{$name}}</li>
    @endforeach
    </ul>



    {{ $user }}
</body>
</html>