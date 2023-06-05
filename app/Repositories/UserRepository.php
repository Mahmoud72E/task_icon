<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Get all users ordered by id and email.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getUsers()
    {
        return User::orderBy('name', 'asc')
                   ->orderBy('email', 'asc')
                   ->get();
    }
}
