<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Cabang extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'tabel_cabang';
    protected $fillable = [
        'nama_cabang', 
        'alamat',
        'kecamatan',
        'kode_pos',
        'id_kota',
        'id_provinsi',
    ];
}
