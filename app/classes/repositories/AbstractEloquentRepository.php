<?php

abstract class AbstractEloquentRepository
{
    /* @var $model \Eloquent */
    private $model;

    /**
     * @return \Eloquent
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param \Eloquent $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function readAll()
    {
        $model = $this->getModel();
        return $model->all();
    }

    public function create(Array $attributes)
    {
        $model = $this->getModel();
        return $model->create($attributes);
    }

}