<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Karyawan
                </div>
                <div class="card-body">
                    <a href="/karyawan/tambah" class="btn btn-primary">Create New</a>
                    
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tgl Lahir</th>
                                <th>Kota Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($karyawan as $p)
                            <tr>
                                <td>{{ $p->nama_karyawan }}</td>
                                <td>{{ $p->tgl_lahir }}</td>
                                <td>{{ $p->kota_lahir }}</td>
                                <td>
                                    <a href="/karyawan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/karyawan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>