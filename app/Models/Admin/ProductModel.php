<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class ProductModel extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'products';
    protected $fillable = [
        'nama_product',
        'category_id',
        'satuan',
        'harga_beli',
        'harga_jual',
        'qty',
        'berat',
        'diskon',
        'description',
        'slug',
    ];

    function category(){
        return $this->belongsTo('App\Models\Admin\Category');
    }

    function imageproduct() {
        return $this->hasMany(imageproduct::class, 'product_id');
    }
}
