<?php

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->setModel($user);
    }
}