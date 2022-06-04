<?php

class ModelController
{
    public $models;

    public function __construct()
    {
        $this->models = new Models();
    }

    public function index()
    {
        $content['models'] = false;

        $models = $this->models->getAll();

        if(true === !empty($models)) :
            $content['models'] = $models;
        endif;

        view('modellen', $content);
    }

    public function modelInformation($id)
    {
        $content['model'] = false;

        $model = $this->models->getModelById($id);

        if(true === !empty($model)) :
            $content['model'] = $model;
        endif;

        view('model', $content);
    }
}
