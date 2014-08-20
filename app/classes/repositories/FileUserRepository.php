<?php

class FileUserRepository implements UserRepositoryInterface
{

    /**
     * This should return the same data structure as the EloquentUserRepository
     *
     * @return array
     */
    public function readAll()
    {
        return array();
    }

    /**
     * This one cannot create as no logic is built to do this
     * @param array $attributes
     *
     * @return bool
     */
    public function create(Array $attributes)
    {
        return false;
    }
}