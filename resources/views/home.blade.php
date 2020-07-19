@extends('layout/template')
@section('title', 'Home')
@section('container')
  <body>
    <div class="container my-3">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
        .w3-bar-block .w3-bar-item {padding:20px}
        </style>
        <body>
        <div class="w3-container w3-padding-32 w3-center">  
            <h3>Tentang KES</h3><br>
            <img src="/logo.png" alt="Me" class="w3-image" style="display:block;margin:auto" width="100" height="100">
            <div class="w3-padding-32">
              <h4><b>I am Who I Am!</b></h4>
              <h6><i>With Passion For Real, Good Food</i></h6>
              <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            </div>
          </div>
          <hr>
    </div>
  </body>
@endsection