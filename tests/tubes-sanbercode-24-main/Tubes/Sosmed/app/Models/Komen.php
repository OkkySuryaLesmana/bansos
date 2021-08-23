<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'komen';
    protected $fillable = ['nama', 'postingan_id', 'profil_id', 'komen', 'foto'];
    public function postingan()
    {
        return $this->belongsTo(Postingan::class);
    }
}
