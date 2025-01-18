<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Sweet Alert Notifikasi -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Jquery CDN -->
    <script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>

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
                        <th scope="col">Foto</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    @php 
                      $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                          <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px;">
                        </td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelepon }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Delete</button>

                        </td>
                      </tr>
                    @endforeach
 
                    </tbody>
                  </table>
            </div>
        </div>


</body>
<script>

  // Untuk Notifikasi Sweet Alert //
  $('.delete').click( function(){
    var pegawaiid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    swal({
  title: "Yakin?",
  text: "Kamu akan menghapus data pegawai "+nama+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+pegawaiid+""
    swal("Data Berhasil Dihapus", {
      icon: "success",
    });
  } else {
    swal("Data Batal Dihapus");
  }
});
  });


</script>
</html>