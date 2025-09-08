<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
       td,tr,table,th
       {
        padding: 10px;
       }
    </style>
</head>
<body>

    <table border="8">
        <tr><th colspan="5">This is About Table</th></tr>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>Mobile</th>
            <th>City</th>
        </tr>
        <tr>
            <td>Saurabh</td>
            <td>dev.saurabh@gmail.com</td>
            <td>6394634470</td>
            <td>Shravasti</td>
        </tr>
    </table>


    <a href={{'post'}}>Post Page</a>

    <h3>Test Route Redirected</h3>

    {{-- <a href="{{ route('about') }}">about us page</a> --}}
</body>
</html>