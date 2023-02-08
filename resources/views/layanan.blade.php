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
    <title>Layanan</title>
    <style>
        
        /* img {
            object-fit: contain;
            width: 100%;
            height: 500px;
        } */
    </style>
</head>
@section('main')
<body>
    
    <div class="card-group">
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/cuci.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Cuci</h4>
                <p class="card-text">Menggunakan mesin cuci dengan kekuatan 500 horse power, yang dapat mengangkat noda sampe ke akarnya<br>Dipilah terlebih dahulu bukan berdasarkan iman, namun berdasarkan jenis kain.
                    untuk meminimalisir mengelupasnya manik-manik maupun rajut, bukan keimanan.</p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/setrika.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Setrika</h4>
                <p class="card-text">Menggunakan setrika listrik dengan tenaga manusia bukan kuda.
                    disetrika dengan hati dan pikiran yang mulus, agar hasil setrika tidak kusut.
                    </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/CuciSetrika.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title">Cuci Setrika</h4>
                <p class="card-text">Menerima pesanan laundry satu hari jadi dengan bobot kurang dari 10kg.
                    apabila lebih dari 10kg, jangan harap satu hari jadi karena pekerja kami hanyalah manusia biasa, bukan mesin. <br>Tahu diri lah Gan !!!</p>
            </div>
        </div>
    </div>
</body>
@endsection
</html>