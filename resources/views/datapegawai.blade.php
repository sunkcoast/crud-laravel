<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>CRUD LARAVEL</title>
</head>
<body>
    <h1 class="text-center mb-4">Data Pegawai</h1>

        <div class="container">
            <a href="/tambahpegawai" class="btn btn-success">Tambah Data [+]</a>
            <div class="row"> 
                @if ($message = Session::get('success'))
                 <div class="alert alert-success" role="alert">
                    {{ $message }}
                 </div>
                 @endif
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelepon }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-info">Edit</button>
                        </td>
                      </tr>
                    @endforeach
 
                    </tbody>
                  </table>
            </div>
        </div>


</body>
</html>