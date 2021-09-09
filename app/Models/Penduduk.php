<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    public function bansos()
    {
        return $this->belongsToMany(Bansos::class, 'detail_bansos');
    }
}
