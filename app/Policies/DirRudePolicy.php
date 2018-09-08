<?php

namespace sis_ccc\Policies;

use sis_ccc\User;
use sis_ccc\RUDE;
use Illuminate\Auth\Access\HandlesAuthorization;

class DirRudePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the rUDE.
     *
     * @param  \sis_ccc\User  $user
     * @param  \sis_ccc\RUDE  $rUDE
     * @return mixed
     */
    public function view(User $user, RUDE $rUDE)
    {
       //
    }

    /**
     * Determine whether the user can create rUDEs.
     *
     * @param  \sis_ccc\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the rUDE.
     *
     * @param  \sis_ccc\User  $user
     * @param  \sis_ccc\RUDE  $rUDE
     * @return mixed
     */
    public function update(User $user, RUDE $rUDE)
    {       
       //
        return true;
    }

    /**
     * Determine whether the user can delete the rUDE.
     *
     * @param  \sis_ccc\User  $user
     * @param  \sis_ccc\RUDE  $rUDE
     * @return mixed
     */
    public function delete(User $user, RUDE $rUDE)
    {
        //
    }
}
