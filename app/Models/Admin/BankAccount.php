<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class BankAccount extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'bank_account';
    protected $fillable = [
        'nama_bank',
        'no_rekening',
        'pemilik_rekening',
    ];
}
