<?php

namespace App\Models;

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
}
