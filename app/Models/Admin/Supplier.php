<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Supplier extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'suppliers';
    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'kontak_supplier',
        'alamat_supplier',
        'keterangan',
        'email_supplier'
    ];
}
