@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/logo.png"/>
    <title>Water Bender</title>
    <style>
              body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }
        
        a:hover {
          color: #008bc6 !important;
          font-size: 18px !important;
        }
    </style>
</head>
@section('main')
<body>
  
      <div class="container">
        <div>
            <img src="{{ asset('/img/home2.jpg') }}" class="img-thumbnail float-end mt-3" style="height: 500px;">
        </div>
        <div class="float-start">
            <p style="font-size: 80px; font-weight: 700; color:#1a375f; margin-top: 100px">Solusi Pakaian <br> Kotor Anda</p>
        </div><br>
        <div class="float-start">
            <a href="{{ url('/create') }}" class="btn btn-warning" style="color: #1a375f">Pesan Sekarang</a>
        </div>
      </div>
</body>
@endsection
</html>

