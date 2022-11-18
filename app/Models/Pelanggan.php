<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'birth_date',
        'address',
        'id_number',
        'id_type',
        'email',
        'modified_by'
    ];
}
