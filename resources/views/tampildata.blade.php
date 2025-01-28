<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Edit Data Pegawai</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD Laravel</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white text-center">
                        <h5>Form Edit Data</h5>
                    </div>
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jeniskelamin" id="jeniskelamin" required>
                                    <option value="" disabled>Pilih Jenis Kelamin</option>
                                    <option value="cowo" {{ $data->jeniskelamin == 'cowo' ? 'selected' : '' }}>Cowo</option>
                                    <option value="cewe" {{ $data->jeniskelamin == 'cewe' ? 'selected' : '' }}>Cewe</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="notelepon" class="form-label">No Telepon</label>
                                <input type="number" name="notelepon" class="form-control" id="notelepon" value="{{ $data->notelepon }}" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2025 Ini Copyright
        </div>
    </footer>

</body>
</html>
