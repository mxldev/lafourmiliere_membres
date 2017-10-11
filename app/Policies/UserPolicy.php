<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability) {
        if($user->hasRole("admin")) return true;
    }

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $authUser, $user)
    {
        return true;
    }

    public function edituser(User $user)
    {
        return $user->hasRole("accountant");
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
     public function show(User $user)
     {
        if($user->hasRole("accountant")) return true;
     }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $authUser, $user)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $authUser, $user)
    {
        return true;
    }

    public function viewmdashboard(User $user)
    {
        //return $is_member = session('is_member', false);
        return $user->ismember();
    }
}
