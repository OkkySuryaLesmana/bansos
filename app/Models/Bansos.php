<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;
    
    public function penduduk()
    {
        return $this->belongsToMany(Penduduk::class, 'detail_bansos');
    }
}
