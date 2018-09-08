<?php

namespace sis_ccc\Policies;

use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstuPolicy {

    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct() {
//
    }

    /* ------------------------- */

    public function EscritorioView() {
        return true;
    }

    /* ------------------------- */

    public function RUDEView() {
        return true;
    }

    public function actualizar_GECN(User $user, RUDE $idrude) {
        return $user->id == $idrude->user_id;
    }

    /* ------------------------- */

    public function NotasView() {
        return true;
    }

}
