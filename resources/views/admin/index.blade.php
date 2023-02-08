<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Order</title>
</head>
@extends('template')
@section('main')
<body>
    <div class="card border-0 rounded shadow m-5">
        <div class="card-body">
            <table class="table table-bordered mt-1 table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID Order</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" class="col-md-2">Berat Laundry (Kg)</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataOrder as $data)
                    <tr class="text-center">
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->id }}</a></td>
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->nama }}</a></td>
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->nomor }}</a></td>
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->alamat }}</a></td>
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->berat }}</a></td></td>
                        <td><a style="text-decoration: none; color: black" href={{ route('order.show', $data->id) }}>{{ $data->layanan }}</a></td></td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('order.destroy', $data->id) }}" method="POST">
                                <a href="{{ route('order.edit', $data->id) }}"
                                    class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                            <div>
                                <a href="{{ route('order.show', $data->id) }}" class="btn btn-info mt-1">Invoice</a>
                            </div>
                        </td>
                      </tr>
                    @empty
                    <tr>
                        <td class="text-center text-mute" colspan="4">Belum ada Order</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
     
@endsection   
</body>
</html>