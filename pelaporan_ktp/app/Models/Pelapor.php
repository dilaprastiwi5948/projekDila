<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelapor;

class Pelapor extends Model
{
    protected $table="pelapor"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas 
    protected $primaryKey = 'nik_pelapor'; // Memanggil isi DB Dengan primarykey 
    /** 
    * The attributes that are mass assignable.
    * 
    * @var array 
    */ 
    protected $fillable = [ 
        'nik_pelapor', 
        'jenis_pelaporan', 
        'nama', 
        'tanggal_lahir', 
        'alamat', 
        'kelurahan', 
        'kecamatan', 
        'kota',
        'pengajuan', 
        'keterangan',
        'operator_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
        // return $this->belongsTo('App\Models\User' , 'nik_operator');

    }
};