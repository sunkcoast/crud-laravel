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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Toastr CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD LARAVEL</title>
</head>
<body>
    <h1 class="text-center mb-4">Data Pegawai</h1>

        <div class="container">
            <a href="/tambahpegawai" class="btn btn-success">Tambah Data [+]</a>
            
            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                  <form action="/pegawai" method="GET">
                    <input type="search" id="inputPassword6" placeholder="Cari Data" name="search" class="form-control" aria-describedby="passwordHelpInline">
                  </form>
                  </div>
            </div>


            <div class="row"> 
             {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{ $message }}
                </div>
             @endif --}}
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
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
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
                  {{ $data->links() }}
            </div>
            <form action="{{ route('logout') }}" method="POST">
               @csrf
                <button type="submit" class="btn btn-warning">Logout</button>
            </form>

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

<script>

  @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
  @endif

</script>

</html>