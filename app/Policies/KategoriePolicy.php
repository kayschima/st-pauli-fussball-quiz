<?php

namespace App\Policies;

use App\Models\Kategorie;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KategoriePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Kategorie $kategorie)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Kategorie $kategorie)
    {
    }

    public function delete(User $user, Kategorie $kategorie)
    {
    }

    public function restore(User $user, Kategorie $kategorie)
    {
    }

    public function forceDelete(User $user, Kategorie $kategorie)
    {
    }
}
