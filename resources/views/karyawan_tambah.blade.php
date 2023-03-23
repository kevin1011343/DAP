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
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/karyawan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>nama_karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan ..">
 
                            @if($errors->has('nama_karyawan'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_karyawan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                             @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kota Lahir</label>
                            <input type="text" name="kota_lahir" class="form-control" placeholder="Kota Lahir">
                             @if($errors->has('kota_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('kota_lahir')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>