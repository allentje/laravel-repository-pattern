<?php

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        //slash this line and unslash the next to switch teh repositories
        $this->app->bind('UserRepositoryInterface', 'EloquentUserRepository');
        //$this->app->bind('UserRepositoryInterface', 'FileUserRepository');
    }
}