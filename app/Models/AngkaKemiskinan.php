<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AngkaKemiskinan extends Model
{
    use HasFactory;
    /**
     * Statuses.
     */
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    protected $guarded = [];
    public function scopeCurrentUser($query)
    {
        // dd($query);
        return Auth::user()->hasRole('desa') ? $query : $query->where('id', Auth::user()->id);
    }
    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->id;
        }

        parent::save();
    }

    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    public static function dataKemiskinanDesa()
    {
        return AngkaKemiskinan::where('kode_desa', Auth::user()->kode_desa)->count();
    }
    public static function dataKemiskinanKecamatan()
    {
        return AngkaKemiskinan::where('kode_kecamatan', Auth::user()->kode_kecamatan)->count();
    }
}
