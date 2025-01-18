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
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

        <div class="container">

            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                          aria-describedby="emailHelp" value="{{ $data->nama}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                          <option selected>{{ $data->jeniskelamin }}</option>
                          <option value="cowo">cowo</option>
                          <option value="cewe">cewe</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" 
                         aria-describedby="emailHelp" value="{{ $data->notelepon}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>


</body>
</html>