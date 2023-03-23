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
                    
                    <form method="post" action="/karyawan/update/$karyawan->id">
                        
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

 
                        <div class="form-group">
                            <label>nama_karyawan</label>
                            <input class="form-control" name="nama_karyawan" required value="$karyawan->nama_karyawan"  type="text">
                         
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" name="tgl_lahir" required value="$karyawan->tgl_lahir"  type="text">

                             @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kota Lahir</label>
                            <input class="form-control" name="tgl_lahir" required value="$karyawan->kota_lahir"  type="text">

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