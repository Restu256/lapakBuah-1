<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Voucher extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'voucher';
    protected $fillable = [
        'voucher',
        'masa_berlaku',
    ];
}
