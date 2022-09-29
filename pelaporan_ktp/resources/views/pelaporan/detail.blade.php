@extends('pelaporan.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 40rem;"> 
            <div class="card-header text-center"> 
                <h3>Detail Data Pelapor</h3>
            </div>
            <div class="card-body"> 
                <ul class="list-group list-group-flush text-center"> 
                    <li class="list-group-item"><b>NIK: </b><br>{{$Pelapor->nik_pelapor}}</li> 
                    <li class="list-group-item"><b>Jenis Pelaporan: </b><br>{{$Pelapor->jenis_pelaporan}}</li> 
                    <li class="list-group-item"><b>Nama: </b><br>{{$Pelapor->nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b><br>{{$Pelapor->tanggal_lahir}}</li>
                    <li class="list-group-item"><b>Desa / Kelurahan: </b><br>{{$Pelapor->kelurahan}}</li> 
                    <li class="list-group-item"><b>Kecamatan: </b><br>{{$Pelapor->kecamatan}}</li> 
                    <li class="list-group-item"><b>Kabupaten / Kota: </b><br>{{$Pelapor->kota}}</li> 
                    <li class="list-group-item"><b>Pengajuan: </b><br>{{$Pelapor->pengajuan}}</li> 
                    <li class="list-group-item"><b>Keterangan: </b><br>{{$Pelapor->keterangan}}</li>
                    <li class="list-group-item"><b>Tanggal: </b><br>{{$Pelapor->tanggal}}</li>  
                </ul> 
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pelaporan.index') }}">Kembali</a> 
        </div> 
    </div> 
</div>
@endsection