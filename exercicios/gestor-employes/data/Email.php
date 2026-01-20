<?php

class Email {
    private string $email;

    public function __construct(string $email)
    {
        try {
            $this->validate($email);
            $this->email = $email;
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception("Email inválido");   
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}