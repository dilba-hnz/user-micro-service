<?php

namespace Repository;

use Entity\User;
use Repository\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function store(User $user)
    {
        // TODO: Implement store() method.
    }

    public function update(User $user)
    {
        // TODO: Implement update() method.
    }

    public function delete(User $user)
    {
        // TODO: Implement delete() method.
    }

    public function getByUsername(string $username)
    {
        // TODO: Implement getByUsername() method.
    }
}