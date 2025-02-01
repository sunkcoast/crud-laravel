<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Toastr CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" 
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" 
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD Laravel</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">CRUD Laravel</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-4">Data Pegawai</h1>

        <div class="mb-3 d-flex justify-content-between">
            <a href="/tambahpegawai" class="btn btn-success">Tambah Data [+]</a>

            <form action="/pegawai" method="GET" class="d-flex">
                <input type="search" name="search" class="form-control me-2" placeholder="Cari Data">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telepon</th>
                        <th>Cabang</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data as $index => $row)
                        <tr>
                            <td>{{ $index + $data->firstItem() }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $row->foto) }}" alt="Foto" style="width: 50px; height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $row->jeniskelamin }}</td>
                            <td>0{{ $row->notelepon }}</td>
                            <td>{{ $row->cabang->nama_cabang ?? '-'}}</td>
                            <td>{{ $row->created_at->format('D, M Y') }}</td>
                            <td>
                                <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $data->links() }}
        </div>
    </div>

    <footer class="bg-light py-3 mt-auto">
        <div class="container text-center">
            <small>© 2025 Ini Copyright.</small>
        </div>
    </footer>

    <script>
        // Sweet Alert konfirm delete
        $('.delete').click(function() {
            const pegawaiId = $(this).data('id');
            const nama = $(this).data('nama');

            swal({
                title: "Yakin?",
                text: "Kamu akan menghapus data pegawai " + nama + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" + pegawaiId;
                    swal("Data Berhasil Dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data Batal Dihapus");
                }
            });
        });

        // Notif untuk Toastr
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>

  
</body>
</html>
