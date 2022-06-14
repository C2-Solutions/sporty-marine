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

        if (!empty($models)) :
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

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        if (!empty(IsAdmin())) :
            view('admin-model', $content);
        else :
            view('model', $content);
        endif;
    }

    public function editModel($id)
    {
        $content['model'] = false;

        $model = $this->database->getById($id, 'models');

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        if (!empty(IsAdmin())) :
            view('admin/edit-model', $content);
        else :
            view('model', $content);
        endif;
    }

    public function createModel($id)
    {
        $content['model'] = false;

        if (!empty(IsAdmin())) :
            view('admin/create-model', $content);
        else :
            view('model', $content);
        endif;
    }

    public function new()
    {
        $data = array(
            'name' => htmlspecialchars($_POST['name']),
            'image' => htmlspecialchars($_POST['image']),
            'length' => htmlspecialchars($_POST['lengte']),
            'width' => htmlspecialchars($_POST['breedte']),
            'weight' => htmlspecialchars($_POST['gewicht']),
            'airdraft' => htmlspecialchars($_POST['vaarthoogte']),
            'draft' => htmlspecialchars($_POST['diepgang']),
            'maxpk' => htmlspecialchars($_POST['maxpk']),
            'maxpers' => htmlspecialchars($_POST['maxpers']),
            'cec' => htmlspecialchars($_POST['cec']),
        );

        if (
            is_array($data) &&
            !empty($data) &&
            !empty($data['name']) &&
            !empty($data['image']) &&
            !empty($data['length']) &&
            !empty($data['width']) &&
            !empty($data['weight']) &&
            !empty($data['airdraft']) &&
            !empty($data['draft']) &&
            !empty($data['maxpk']) &&
            !empty($data['maxpers']) &&
            !empty($data['cec'])
        ) :
            $submission = $this->models->new($data);

            if ($submission) :
                redirect('/admin-modellen');
            endif;

            redirect('/admin-modellen');
        endif;

        redirect('/admin-modellen');
    }

    public function edit()
    {
        $data = array(
            'id' => $_POST['id'],
            'length' => htmlspecialchars($_POST['lengte']),
            'width' => htmlspecialchars($_POST['breedte']),
            'weight' => htmlspecialchars($_POST['gewicht']),
            'airdraft' => htmlspecialchars($_POST['vaarthoogte']),
            'draft' => htmlspecialchars($_POST['diepgang']),
            'maxpk' => htmlspecialchars($_POST['maxpk']),
            'maxpers' => htmlspecialchars($_POST['maxpers']),
            'cec' => htmlspecialchars($_POST['cec']),
        );
        if (
            is_array($data) &&
            !empty($data) &&
            !empty(($data['id'])) &&
            !empty($data['length']) &&
            !empty($data['width']) &&
            !empty($data['weight']) &&
            !empty($data['airdraft']) &&
            !empty($data['draft']) &&
            !empty($data['maxpk']) &&
            !empty($data['maxpers']) &&
            !empty($data['cec'])
        ) :
            $submission = $this->models->edit($data);

            if ($submission) :
                redirect("/admin-modellen");
            endif;

            redirect("/admin-modellen");
        endif;

        redirect("/admin-modellen");
    }

    public function delete($id)
    {
        $deleted = $this->database->delete($id, 'models');

        if ($deleted) :
            return redirect('/admin-modellen');
            exit;
        endif;

        echo 'error';
    }
}
