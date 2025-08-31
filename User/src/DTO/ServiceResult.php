<?php

namespace DTO;

class ServiceResult
{
    public bool $success;
    public ?string $message;
    public mixed $data;

    public function __construct(bool $success, ?string $message = null, mixed $data = null)
    {
        $this->success = $success;
        $this->message = $message;
        $this->data = $data;
    }

    public static function successful(mixed $data = null): self
    {
        return new self(true, null, $data);
    }

    public static function fail(string $message): self
    {
        return new self(false, $message);
    }
}