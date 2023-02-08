<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar User</title>
</head>
@extends('template')
@section('main')
<body>
    <div class="card border-0 rounded shadow m-5">
        <div class="card-body">
            <table class="table table-bordered mt-1 table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID User</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataUser as $user)
                    <tr class="text-center">
                        <td><a style="text-decoration: none; color: black" href='#'>{{ $user->id }}</a></td>
                        <td><a style="text-decoration: none; color: black" href='#'>{{ $user->name }}</a></td>
                        <td><a style="text-decoration: none; color: black" href='#'>{{ $user->email }}</a></td>
                        <td><a style="text-decoration: none; color: black" href='#'>{{ $user->role }}</a></td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('user.destroy', $user->id) }}" method="POST">
                                <a href="{{ route('user.edit', $user->id) }}"
                                    class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
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