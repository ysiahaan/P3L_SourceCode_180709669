<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey ='id_pegawai';
    public $timestamp = false;
    protected $fillable = [ 'id_pegawai',
                            'role_id',
                            'jadwal_id',
                            'nama_pegawai',
                            'telp_pegawai',
                            'jk_pegawai',
                            'alamat_pegawai',
                            'status_pegawai',
                            'username_pegawai',
                            'password_pegawai'];

}
