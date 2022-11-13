<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'address',
        'telp_1',
        'telp_2',
        'fax',
        'modified_by'
    ];

    /**
     * RELATIONS
     */

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function modifier()
    {
        return $this->belongsTo(User::class, 'modified_by', 'id');
    }
}
