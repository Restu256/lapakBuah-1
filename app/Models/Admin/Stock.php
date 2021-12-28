<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Admin\ProductModel;

class Stock extends Model
{
    use HasFactory, HasRoles;
  
    protected $table = 'stock_products';
    protected $fillable = [
        'products_id',
        'first_stock',
        'products_in',
        'products_out',
        'final_stock',
    ];
    
    function product(){
        return $this->belongsTo(ProductModel::class, 'products_id');
    }
}
