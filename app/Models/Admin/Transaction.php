<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Transaction extends Model
{
    use HasFactory, HasRoles;
    
    protected $table = 'transactions_jual';
    protected $fillable = [
    'faktur_penjualan',
    'user_id',
    'booking_id',
    'invoice_no',
    'service_code',
    'parcel_total_weight',
    'shipper',
    'kurir',
    'ongkir',
    'waktu_transaksi',
    'proses',
    'driver_id',
    'no_kendaraan',
    'voucher_id',
    'grand_total',
    ];
}
