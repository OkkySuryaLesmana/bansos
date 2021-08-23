<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'profil';
    protected $fillable = ['alamat', 'umur', 'bio', 'user_id'];
    public function postingan()
    {
        return $this->hasMany(Postingan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
