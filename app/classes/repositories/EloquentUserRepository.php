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
        // TODO: Implement readAll() method.
    }

    public function create(Array $attributes)
    {
        // TODO: Implement create() method.
    }
}