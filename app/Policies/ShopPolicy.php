<?php

namespace App\Policies;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if($user->hasRole('admin')){
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

   
    public function read(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Shop  $shop
     * @return mixed
     */
    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

}
