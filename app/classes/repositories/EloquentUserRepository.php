<?php

class EloquentUserRepository implements UserRepositoryInterface
{

    /* @var $user User */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function readAll()
    {
        return $this->user->all();
    }

    public function create(Array $attributes)
    {
        return $this->user->create($attributes);
    }
}