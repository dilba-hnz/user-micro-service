<?php

namespace Service\Contracts;
use DTO\ServiceResult;
use Entity\User;

interface UserServiceInterface
{
    public function register(string $username, string $password): ServiceResult;

    public function login(string $username, string $password): ServiceResult;

    public function logout(User $user): ServiceResult;
}