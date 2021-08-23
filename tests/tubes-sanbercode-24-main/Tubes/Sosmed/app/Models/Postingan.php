<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'postingan';
    protected $fillable = ['nama', 'tulisan', 'gambar', 'caption', 'quote', 'profil_id', 'foto'];
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }

    public function Komen()
    {
        return $this->hasMany(Komen::class);
    }

    public function Like()
    {
        return $this->hasMany(Like::class);
    }
}
