<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
    public function scopeIndikator1($query){
        return $query->where('indikator_id', '=' , '1');
    }
    public function scopeIndikator2($query){
        return $query->where('indikator_id', '=' , '2');
    }
    public function scopeIndikator3($query){
        return $query->where('indikator_id', '=' , '3');
    }
    public function scopeIndikator4($query){
        return $query->where('indikator_id', '=' , '4');
    }
    public function scopeIndikator5($query){
        return $query->where('indikator_id', '=' , '5');
    }
    public function scopeIndikator6($query){
        return $query->where('indikator_id', '=' , '6');
    }
    public function scopeIndikator7($query){
        return $query->where('indikator_id', '=' , '7');
    }
    public function scopeIndikator8($query){
        return $query->where('indikator_id', '=' , '8');
    }
    public function scopeIndikator9($query){
        return $query->where('indikator_id', '=' , '9');
    }
    public function scopeIndikator10($query){
        return $query->where('indikator_id', '=' , '10');
    }
    public function scopeIndikator11($query){
        return $query->where('indikator_id', '=' , '11');
    }
    public function scopeIndikator12($query){
        return $query->where('indikator_id', '=' , '12');
    }
    public function scopeIndikator13($query){
        return $query->where('indikator_id', '=' , '13');
    }
    public function scopeIndikator14($query){
        return $query->where('indikator_id', '=' , '14');
    }
    public function scopeIndikator15($query){
        return $query->where('indikator_id', '=' , '15');
    }
    public function scopeIndikator16($query){
        return $query->where('indikator_id', '=' , '16');
    }
    public function scopeIndikator17($query){
        return $query->where('indikator_id', '=' , '17');
    }
    public function scopeIndikator18($query){
        return $query->where('indikator_id', '=' , '18');
    }
    public function scopeIndikator19($query){
        return $query->where('indikator_id', '=' , '19');
    }
    public function scopeIndikator20($query){
        return $query->where('indikator_id', '=' , '20');
    }
    
}
