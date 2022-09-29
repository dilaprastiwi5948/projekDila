@extends('pelaporan.layout') 
@section('content') 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 60rem;"> 
            <div class="card-header text-center"> 
                <h3>Edit Data Pegawai</h3>
            </div>
            <div class="card-body"> @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div>
            @endif 
            <form method="post" action="{{ route('pelaporan.update', $Pelapor->nik_pelapor) }}" id="myForm"> 
            @csrf 
            @method('PUT')
                <div class="form-group"> 
                    <label for="nik_pelapor">NIK</label> 
                    <input type="text" name="nik_pelapor" class="form-control" id="nik_pelapor" value="{{ $Pelapor->nik_pelapor}}" aria-describedby="nik_pelapor" > 
                </div>
                <div class="form-group"> 
                    <label for="jenis_pelaporan">Jenis Pelaporan</label> 
                    <select type="jenis_pelaporan" name="jenis_pelaporan" class="form-control" id="jenis_pelaporan" aria-describedby="jenis_pelaporan" required >
                        <option >Dalam Daerah </option>
                        <option >Luar Daerah</option>
                    </select> 
                </div>
                <div class="form-group"> 
                    <label for="nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pelapor->nama }}" aria-describedby="nama" > 
                </div>
                <div class="form-group"> 
                    <label for="tanggal_lahir">Tanggal Tahir</label> 
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Pelapor->tanggal_lahir }}" aria-describedby="tanggal_lahir" required> 
                </div>
                <div class="form-group"> 
                    <label for="alamat">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" required value="{{ $Pelapor->alamat }}"> 
                </div>
                <div class="form-group"> 
                    <label for="kelurahan">Desa / Kelurahan</label> 
                    <input type="kelurahan" name="kelurahan" class="form-control" id="kelurahan" aria-describedby="kelurahan" required value="{{ $Pelapor->kelurahan }}"> 
                </div>
                <div class="form-group"> 
                    <label for="kecamatan">Kecamatan</label> 
                    <input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" required value="{{ $Pelapor->kecamatan }}"> 
                </div>
                <div class="form-group"> 
                    <label for="kota">Kabupaten / Kota</label> 
                    <input type="kota" name="kota" class="form-control" id="kota" aria-describedby="kota" required value="{{ $Pelapor->kota }}"> 
                </div>
                <div class="form-group"> 
                    <label for="pengajuan">pengajuan</label> 
                    <select type="pengajuan" name="pengajuan" class="form-control" id="pengajuan" aria-describedby="pengajuan" value="{{ $Pelapor->pengajuan }}">
                        <option>Online</option>
                        <option>Dinas</option>
                        <option>Kelurahan</option>
                        <option>MPP</option>
                      </select> 
                </div>
                <div class="form-group"> 
                    <label for="keterangan">keterangan</label> 
                    <select type="keterangan" name="keterangan" class="form-control" id="keterangan" aria-describedby="keterangan" value="{{ $Pelapor->keterangan }}"> 
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
                    <a class="btn btn-success" href="{{ route('pelaporan.index') }}">Back</a>
                </div> 
            </form> 
        </div> 
    </div> 
</div> 
</div>
@endsection