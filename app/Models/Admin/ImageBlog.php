<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class ImageBlog extends Model
{
    use HasFactory, HasRoles;
  
    protected $table = 'images_blog';
    protected $fillable = [
        'blog_id',
        'image',
    ];
    
    function blog(){
        return $this->belongsTo(blog::class, 'blog_id');
    }
}
