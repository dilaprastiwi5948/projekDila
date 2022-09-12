<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Operator extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table="operator"; // Eloquent akan membuat model mahasiswa menyimpan record
    protected $primaryKey = 'nik_operator'; // Memanggil isi DB Dengan primarykey
    /** 
    * * The attributes that are mass assignable.
    *
    * @var array 
    */ 
    protected $fillable = [ 
        'nik_operator', 
        'nama', 
        'jabatan', 
        'username', 
        'password', 
    ];
};
