<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'nomor_customer';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [ 'id_customer',
                            'nama_customer',
                            'alamat_customer',
                            'email_customer',
                            'jk_customer',
                            'telp_customer',
                            'password_customer',
                            'lahir_customer',
                            'pendaftaran_customer',
                            'alergi_customer',
                            'point_customer',
                            'nomor_customer'];
}
