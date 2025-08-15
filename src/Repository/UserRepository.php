<?php

namespace Repository;

use Repository\Contracts\UserRepositoryInterface;
use User;

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