<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function getUser(string $email)
    {
        return $this->model->where('email', $email)->first();
    }
}