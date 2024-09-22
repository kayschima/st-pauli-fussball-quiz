<?php

namespace App\Policies;

use App\Models\Frage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FragePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool {}

    public function view(User $user, Frage $frage): bool {}

    public function create(User $user): bool {}

    public function update(User $user, Frage $frage): bool {}

    public function delete(User $user, Frage $frage): bool {}

    public function restore(User $user, Frage $frage): bool {}

    public function forceDelete(User $user, Frage $frage): bool {}
}
