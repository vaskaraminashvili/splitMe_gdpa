<?php

namespace App\Policies;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThreadPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Thread $thread): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Thread $thread): bool
    {
    }

    public function delete(User $user, Thread $thread): bool
    {
    }

    public function restore(User $user, Thread $thread): bool
    {
    }

    public function forceDelete(User $user, Thread $thread): bool
    {
    }
}
