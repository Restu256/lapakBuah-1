<?php

namespace App\Models\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\Stock;
use App\Models\User;
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
        'user_id'
    ];

    function userId(){
        return $this->belongsTo(User::class, 'user_id');
    }

    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function imageproduct() {
        return $this->hasMany(imageproduct::class, 'product_id');
    }
    function stock() {
        return $this->hasMany(Stock::class, 'products_id');
    }
}
