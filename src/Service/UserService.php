<?php

namespace Service;

use Repository\Contracts\UserRepositoryInterface;
use UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function register(string $username, string $password)
    {
        // TODO: Implement register() method.
    }

    public function login(string $username, string $password)
    {
        // TODO: Implement login() method.
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }
}