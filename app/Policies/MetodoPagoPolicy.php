<?php

namespace App\Policies;

use App\Models\User;
use App\Models\metodoPago;
use Illuminate\Auth\Access\HandlesAuthorization;

class MetodoPagoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\metodoPago  $metodoPago
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, metodoPago $metodoPago)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\metodoPago  $metodoPago
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, metodoPago $metodoPago)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\metodoPago  $metodoPago
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, metodoPago $metodoPago)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\metodoPago  $metodoPago
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, metodoPago $metodoPago)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\metodoPago  $metodoPago
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, metodoPago $metodoPago)
    {
        //
    }
}
