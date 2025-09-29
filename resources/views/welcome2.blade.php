@php
    $fruits = ['Apple','Mango','Grapes','Peach'];
@endphp

@include('pages.header' , ['name' => 'Saurabh Pandey' , "name" => "nkit" , "name" => ""]);

<h1>Home Page</h1>

@include('pages.footer');