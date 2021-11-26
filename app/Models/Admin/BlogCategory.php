<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class BlogCategory extends Model
{

    use HasFactory, HasRoles;

    protected $table = 'category_blog';
    protected $fillable = [
        'category',
        'image',
        'slug',
    ];
    function product() {
        return $this->hasMany('App\Models\Admin\Blog');
    }
}