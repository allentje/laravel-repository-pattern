<?php

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('UserRepositoryInterface', 'EloquentUserRepository');
    }
}