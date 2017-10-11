<?php

namespace App\Policies;

use App\User;
use App\Cotisation;
use Illuminate\Auth\Access\HandlesAuthorization;

class CotisationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the cotisation.
     *
     * @param  \App\User  $user
     * @param  \App\Cotisation  $cotisation
     * @return mixed
     */
    public function view(User $user, Cotisation $cotisation)
    {
        return true;
    }

    /**
     * Determine whether the user can create cotisations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the cotisation.
     *
     * @param  \App\User  $user
     * @param  \App\Cotisation  $cotisation
     * @return mixed
     */
    public function update(User $user, Cotisation $cotisation)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the cotisation.
     *
     * @param  \App\User  $user
     * @param  \App\Cotisation  $cotisation
     * @return mixed
     */
    public function delete(User $user, Cotisation $cotisation)
    {
        return true;
    }
}
