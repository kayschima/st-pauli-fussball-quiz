<?php

namespace App\Policies;

use App\Models\Schwierigkeit;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchwierigkeitPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool {}

    public function view(User $user, Schwierigkeit $schwierigkeit): bool {}

    public function create(User $user): bool {}

    public function update(User $user, Schwierigkeit $schwierigkeit): bool {}

    public function delete(User $user, Schwierigkeit $schwierigkeit): bool {}

    public function restore(User $user, Schwierigkeit $schwierigkeit): bool {}

    public function forceDelete(User $user, Schwierigkeit $schwierigkeit): bool {}
}
