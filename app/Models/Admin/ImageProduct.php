<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class ImageProduct extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'image_product';
    protected $fillable = [
        'product_id',
        'image',
    ];

    function product(){
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
