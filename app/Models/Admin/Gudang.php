<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Gudang extends Model
{
    use HasFactory, HasRoles;
    protected $table = 'table_warehouse';
    protected $fillable = [
        'warehouse_name', 
        'address',
        'provincies_id',
        'regencies_id',
        'district_id',
        'villages_id',
        'kode_pos',
        'country',
    ];
}

