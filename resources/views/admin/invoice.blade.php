<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Invoice</title>
</head>
<body>
    <div class="card w-50 m-auto mt-4 mb-4">
        <div class="card-body mx-4">
            <img src="{{ asset('/img/logo.png') }}" class="rounded mx-auto d-block mt-3" style="height: 90px;">
            <div class="mt-3">
              <div class="blockquote text-center">Water Bender Laundry<br><br>Terimakasih atas kepercayaan Anda</div>
              <div class="blockquote-footer text-center">Hasil kebersihan laundry bergantung pada keimanan Anda, karena kebersihan adalah sebagian dari iman.
              </div>
            </div>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">{{$dataOrder->nama}}</li>
                <li class="text-muted mt-1"><span class="text-black">Order</span> #{{$dataOrder->id}}</li>
                <li class="text-black mt-1">{{ date('Y-m-d') }}</li>
              </ul>
              <hr>
              <div class="col-xl-10">
                Berat Laundry 
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{$dataOrder->berat}} Kg
                </p>
              </div>
              <hr>
            </div>
            <div class="d-flex justify-content-between">
              <div>
                <p>{{$dataOrder->layanan}}</p>
              </div>
              <div>
                <p style="font-size: 17px; justify-content: end" class="">Rp. {{$harga->harga}}/Kg
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-2">
                <p class="float-end">
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end fw-bold">Total: Rp. {{$total}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
              <div class="blockquote">
                Salam hangat,<br>Water Bender Laundry
              </div>
              <div class="blockquote-footer">Laudry today or Naked tomorrow</div>
            </div>
        </div>
      </div>
      <div class="text-center mb-2">
        <a href="{{url()->previous()}}" class="btn btn-info">Kembali</a>
      </div>
</body>
</html>