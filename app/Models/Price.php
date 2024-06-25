<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'price',
        'deskripsi',
        'benefit',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

}
