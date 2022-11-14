<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parfum extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
        'status',
        'modified_by'
    ];

    /**
     * RELATION
     */

    public function modifier()
    {
        return $this->belongsTo(User::class, 'modified_by', 'id');
    }
}
