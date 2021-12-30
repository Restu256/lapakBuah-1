<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class TypeProduct extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'type_products';
    protected $fillable = [
        'product_id',
        'type_products',
        'satuan',
        'harga_beli',
        'harga_jual',
        'qty',
        'berat',
        'diskon',
    ];

    function product(){
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
