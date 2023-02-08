@extends('template')
    

<html>
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
        <style>
            body {
                font-family: 'Ubuntu', sans-serif !important;
            }
        </style>
    </head>
     @section('main')
<body>
   
    <div class="aboutus" style="position: relative; text-align:center;">
        <div class="fahmi">
            <img src="{{ asset('img/profil/fahmibanner.jpg') }}" alt="Snow" style="width: 100%;">
            <div class="namafahmi" style="position:absolute; width:100%; margin-top: -22%;">
                <h1 style="font-size: 60px;">M. Fahmi Ahsan</h1>
                <p style="font-size: 30px;"> 20104410010</p>
            </div>
        </div>
        <div class="indra">
            <img src="{{ asset('img/profil/indrabanner.jpg') }}"  alt="Snow" style="width: 100%;">
            <div class="namaindra" style="position:absolute; width:100%; margin-top: -25%;">
                <h1 style="font-size: 60px;">Indra Kurniawan</h1>
                <p style="font-size: 30px;"> 20104410004</p>
            </div>
        </div>
        <div class="ayyin">
            <img src="{{ asset('img/profil/ayyinbanner.jpg') }}"  alt="Snow" style="width: 100%;">
            <div class="namaayyin" style="position:absolute; width:100%; margin-top: -25%;">
                <h1 style="font-size: 60px;">Muayyin Wafi Khoiriyah</h1>
                <p style="font-size: 30px;"> 20104410015</p>
            </div>
        </div>
        <div class="elda">
            <img src="{{ asset('img/profil/eldabanner.jpg') }}"  alt="Snow" style="width: 100%;">
            <div class="namaelda" style="position:absolute; width:100%; margin-top: -22%;">
                <h1 style="font-size: 60px;">Elda Vina F. R.</h1>
                <p style="font-size: 30px;"> 20104410043</p>
            </div>
        </div>
    </div>
</body>
    @endsection