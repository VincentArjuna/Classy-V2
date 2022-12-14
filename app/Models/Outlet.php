<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outlet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'address',
        'telp_1',
        'telp_2',
        'fax',
        'status',
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
