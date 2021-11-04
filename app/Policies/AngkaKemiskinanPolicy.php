<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AngkaKemiskinan;
use Illuminate\Auth\Access\HandlesAuthorization;

class AngkaKemiskinanPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function edit(AngkaKemiskinan $user, $pc)
    {
        return $pc->owner_id === $user->author_id || $user->hasRole('desa');
    }

    public function delete(AngkaKemiskinan $user, $pc)
    {
        return $pc->owner_id === $user->author_id || $user->hasRole('desa');
    }

    public function read(AngkaKemiskinan $user, $pc)
    {
        return $pc->owner_id === $user->author_id || $user->hasRole('desa');
    }
}
