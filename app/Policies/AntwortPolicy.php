<?php

namespace App\Policies;

use App\Models\Antwort;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AntwortPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool {}

    public function view(User $user, Antwort $antwort): bool {}

    public function create(User $user): bool {}

    public function update(User $user, Antwort $antwort): bool {}

    public function delete(User $user, Antwort $antwort): bool {}

    public function restore(User $user, Antwort $antwort): bool {}

    public function forceDelete(User $user, Antwort $antwort): bool {}
}
