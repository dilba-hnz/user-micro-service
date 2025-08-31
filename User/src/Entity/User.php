<?php

namespace Entity;
class User
{
    protected string $username;
    protected string $password;
    protected string $email;
    protected string $token;

    public function __construct(string $username, string $password, ?string $email = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}