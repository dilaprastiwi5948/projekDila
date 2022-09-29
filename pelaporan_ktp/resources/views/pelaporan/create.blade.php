<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registrasi Pelaporan</title>
</head>
<body>
    

<div class="container mt-5"> 
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <div class="navbar-brand" >
            <strong>Pelaporan KTP</strong>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href={{ route('pelaporan.create') }}>Registrasi Pelaporan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('pelaporan.index') }}>Data Pencetakan</a>
              </li>    
            </ul>
          </div>
        </div>
      </nav>

        <div class="card" > 
            <div class="card-header text-center"> 
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
                @endif 
                @if ($message = Session::get('success')) 
                                    <div class="alert alert-success"> 
                                    <p>{{ $message }}</p> 
                                    </div> 
                                @endif
                <form method="post" action="{{ route('pelaporan.store') }}" id="myForm">
                @csrf 
                    <div class="form-group"> 
                        <label for="nik_pelapor">NIK</label>
                        @error('nik_pelapor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input type="text" name="nik_pelapor" class="form-control @error('nik_pelapor') is-invalid @enderror" id="nik_pelapor" aria-describedby="nik_pelapor" >  
                    </div>

                    <div class="form-group"> 
                        <label for="jenis_pelaporan">Jenis Pelaporan</label> 
                        <select type="jenis_pelaporan" name="jenis_pelaporan" class="form-control" id="jenis_pelaporan" aria-describedby="jenis_pelaporan" required value="{{old('jenis_pelaporan')}}">
                            <option >Dalam Daerah</option>
                            <option >Luar Daerah</option>
                        </select> 
                    </div>

                    <div class="form-group"> 
                        <label for="nama">Nama</label> 
                        <input type="Nama" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukan Nama" required value="{{old('nama')}}"> 
                    </div> 

                    <div class="form-group"> 
                        <label for="tanggal_lahir">Tanggal Tahir</label> 
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" required> 
                    </div> 

                    <div class="form-group"> 
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Jl. Sesama" required value="{{old('alamat')}}"> 
                    </div>

                    <div class="form-group"> 
                        <label for="kelurahan">Desa / Kelurahan</label> 
                        <input type="kelurahan" name="kelurahan" class="form-control" id="kelurahan" aria-describedby="kelurahan" placeholder="Sawo Jajar" required value="{{old('kelurahan')}}"> 
                    </div>

                    <div class="form-group"> 
                        <label for="kecamatan">Kecamatan</label> 
                        <input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" placeholder="Arjosari" required value="{{old('kecamatan')}}"> 
                    </div>

                    <div class="form-group"> 
                        <label for="kota">Kabupaten / Kota</label> 
                        <input type="kota" name="kota" class="form-control" id="kota" aria-describedby="kota" placeholder="Malang" required value="{{old('kota')}}"> 
                    </div>

                    <div class="form-group"> 
                        <label for="pengajuan">pengajuan</label> 
                        <select type="pengajuan" name="pengajuan" class="form-control" id="pengajuan" aria-describedby="pengajuan" value="{{old('pengajuan')}}">
                            <option>Online</option>
                            <option>Dinas</option>
                            <option>Kelurahan</option>
                            <option>MPP</option>
                          </select> 
                    </div>

                    <div class="form-group"> 
                        <label for="keterangan">keterangan</label> 
                        <select type="keterangan" name="keterangan" class="form-control" id="keterangan" aria-describedby="keterangan" value="{{old('keterangan')}}"> 
                            <option>Rusak</option>
                            <option>Kehilangan</option>
                            <option>Pemula</option>
                            <option>Perubahan data</option>
                            <option>Paket</option>
                            <option>Surat Keterangan</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div> 
                    </form> 
                </div> 
            </div> 
        
    </div>
</body>
</html>
