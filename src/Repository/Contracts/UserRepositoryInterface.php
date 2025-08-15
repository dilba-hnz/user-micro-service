<?php

namespace Repository\Contracts;

use User;

interface UserRepositoryInterface
{
    public function store(User $user);

    public function getByUsername(string $username);

    public function update(User $user);

    public function delete(User $user);
}