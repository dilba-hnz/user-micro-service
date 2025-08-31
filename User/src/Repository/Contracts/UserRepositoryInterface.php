<?php

namespace Repository\Contracts;

use Entity\User;

interface UserRepositoryInterface
{
    public function store(User $user);

    public function getByUsername(string $username);

    public function update(User $user);

    public function delete(User $user);
}