<?php

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('UserRepositoryInterface', 'EloquentUserRepository');
    }
}