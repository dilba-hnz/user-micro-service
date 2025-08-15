<?php

interface UserServiceInterface
{
    public function register(string $username, string $password);
    public function login(string $username, string $password);
    public function logout();
}