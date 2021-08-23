<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'follow';
    protected $fillable = ['profil_id1', 'profil_id2'];
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
