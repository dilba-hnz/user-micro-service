<?php

namespace Service;

use DTO\ServiceResult;
use Entity\User;
use Repository\Contracts\UserRepositoryInterface;
use Service\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function register(string $username, string $password): ServiceResult
    {
        if ($this->userRepository->getByUsername($username)) {
            return ServiceResult::fail("Username already exists");
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User($username, $hashedPassword);

        $createdUser = $this->userRepository->store($user);

        return ServiceResult::successful($createdUser);
    }

    public function login(string $username, string $password): ServiceResult
    {
        $user = $this->userRepository->getByUsername($username);

        if (!$user) {
            return ServiceResult::fail("Username not found");
        }

        if (!password_verify($password, $user->getPassword())) {
            return ServiceResult::fail("Invalid password");
        }

        $token = bin2hex(random_bytes(32));

        $user->setToken($token);

        $this->userRepository->update($user);

        return ServiceResult::successful($token);
    }

    public function logout(User $user): ServiceResult
    {
        $user->setToken(null);

        $this->userRepository->update($user);

        return ServiceResult::successful(true);
    }
}