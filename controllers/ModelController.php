<?php

class ModelController
{
    public $models;
    public $database;

    public function __construct()
    {
        $this->models = new Models();
        $this->database = new Database();
    }

    public function index()
    {
        $content['models'] = false;

        $models = $this->database->getAll('models');

        if (true === !empty($models)) :
            $content['models'] = $models;
        endif;

        if (!empty(IsAdmin())) :
            view('admin/models', $content);
        else :
            view('modellen', $content);
        endif;
    }

    public function modelInformation($id)
    {
        $content['model'] = false;

        $model = $this->database->getById($id, 'models');

        if (true === !empty($model)) :
            $content['model'] = $model;
        endif;

        if (!empty(IsAdmin())) :
            view('admin-model', $content);
        else :
            view('model', $content);
        endif;
    }
}
