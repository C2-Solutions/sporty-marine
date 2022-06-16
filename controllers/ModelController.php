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

        if (!$model) :
            redirect('/modellen');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        if ($model['availability'] == 1) :
            view('model', $content);
        else :
            redirect('/modellen');
        endif;
    }

    public function newModel()
    {
        view('admin/new-model');
    }

    public function editModel($id)
    {
        $content['model'] = false;

        $model = $this->database->getById($id, 'models');

        if (!$model) :
            redirect('/admin-modellen');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        view('admin/edit-model', $content);
    }

    public function new()
    {
        $data = array(
            'name' => htmlspecialchars($_POST['naam']),
            'price' => htmlspecialchars($_POST['prijs']),
            'length' => htmlspecialchars($_POST['lengte']),
            'width' => htmlspecialchars($_POST['breedte']),
            'weight' => htmlspecialchars($_POST['gewicht']),
            'airdraft' => htmlspecialchars($_POST['vaarthoogte']),
            'draft' => htmlspecialchars($_POST['diepgang']),
            'maxpk' => htmlspecialchars($_POST['maxpk']),
            'maxpers' => htmlspecialchars($_POST['maxpers']),
            'builtin' => htmlspecialchars($_POST['bouwjaar']),
            'cec' => htmlspecialchars($_POST['cec']),
            'status' => htmlspecialchars($_POST['status']),
            'availability' => htmlspecialchars($_POST['beschikbaarheid']),
            'description' => htmlspecialchars($_POST['beschrijving']),
            'images' => htmlspecialchars($_FILES['fotos']['name']),
        );

        if (
            is_array($data) &&
            !empty($data) &&
            !empty($data['name']) &&
            !empty($data['price']) &&
            !empty($data['length']) &&
            !empty($data['width']) &&
            !empty($data['weight']) &&
            !empty($data['airdraft']) &&
            !empty($data['draft']) &&
            !empty($data['maxpk']) &&
            !empty($data['maxpers']) &&
            !empty($data['builtin']) &&
            !empty($data['cec']) &&
            !empty($data['status']) &&
            !empty($data['images'])
        ) :
            $submission = $this->models->new($data);

            $tempname = $_FILES['fotos']['tmp_name'];
            $folder = "public/img/" . $data['images'];

            if ($submission && move_uploaded_file($tempname, $folder)) :
                $_SESSION['modelsent'] = true;
                redirect('/admin-modellen');
                exit;
            endif;


            redirect('/error');
            exit;
        endif;

        redirect('/error2');
    }

    public function edit()
    {
        $data = array(
            'id' => $_POST['id'],
            'price' => htmlspecialchars($_POST['prijs']),
            'length' => htmlspecialchars($_POST['lengte']),
            'width' => htmlspecialchars($_POST['breedte']),
            'weight' => htmlspecialchars($_POST['gewicht']),
            'airdraft' => htmlspecialchars($_POST['vaarthoogte']),
            'draft' => htmlspecialchars($_POST['diepgang']),
            'maxpk' => htmlspecialchars($_POST['maxpk']),
            'maxpers' => htmlspecialchars($_POST['maxpers']),
            'builtin' => htmlspecialchars($_POST['bouwjaar']),
            'cec' => htmlspecialchars($_POST['cec']),
            'status' => htmlspecialchars($_POST['status']),
            'availability' => htmlspecialchars($_POST['beschikbaarheid']),
            'description' => htmlspecialchars($_POST['beschrijving']),
        );
        if (
            is_array($data) &&
            !empty($data) &&
            !empty(($data['id'])) &&
            !empty($data['price']) &&
            !empty($data['length']) &&
            !empty($data['width']) &&
            !empty($data['weight']) &&
            !empty($data['airdraft']) &&
            !empty($data['draft']) &&
            !empty($data['maxpk']) &&
            !empty($data['maxpers']) &&
            !empty($data['builtin']) &&
            !empty($data['cec']) &&
            !empty($data['status'])
        ) :
            $submission = $this->models->edit($data);

            if ($submission) :
                redirect("/admin-modellen");
                exit;
            endif;

            redirect("/error");
            exit;
        endif;

        redirect("/error2");
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
