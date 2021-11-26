<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Blog extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'blog';
    protected $fillable = [
        'judul_blog',
        'category_blog_id',
        'user_id',
        'slug',
        'isi_blog',
        'tanggal_pembuatan',
        'tag_blog',
    ];

    function category(){
        return $this->belongsTo(BlogCategory::class, 'id');
    }

    function imageblog() {
        return $this->hasMany(imageblog::class, 'blog_id');
    }
}
