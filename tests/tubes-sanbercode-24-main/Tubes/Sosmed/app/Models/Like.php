<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'like';
    protected $fillable = ['postingan_id', 'profil_id'];
    public function postingan()
    {
        return $this->belongsTo(Postingan::class);
    }
}
