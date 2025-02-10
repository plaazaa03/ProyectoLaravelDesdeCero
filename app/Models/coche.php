<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coche extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'color'];

    // Scope para filtrar por marca
    public function scopeMarca($query, $marca)
    {
        return $query->where('marca', 'like', '%'.$marca.'%');
    }

    // Scope para filtrar por color
    public function scopeColor($query, $color)
    {
        return $query->where('color', 'like', '%'.$color.'%');
    }
}


