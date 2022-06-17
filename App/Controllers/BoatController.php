<?php

class BoatController
{
    protected $pdo;
    protected $conn;

    public function __construct()
    {
        global $pdo;
        global $conn;

        $this->pdo = $pdo;
        $this->pdo = $conn;
    }

    public static function index()
    {
        global $conn;

        $content['models'] = false;

        $models = $conn->read('models');

        if (!empty($models)) :
            $content['models'] = $models;
        endif;

        if (!empty(IsAdmin())) {
            require(new ViewModel())->extendPath("views/admin/boats.view.php", $content);
            exit;
        }

        require(new ViewModel())->extendPath("views/boats.view.php", $content);
    }

    public static function boatInformation($id)
    {
        global $conn;

        $content['model'] = false;

        $model = ($conn->getById($id, 'models'))[0];

        if (!$model) :
            redirect('/boats');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        if ($model['availability'] == 1) :
            require(new ViewModel())->extendPath('views/boat.view.php', $content);
        else :
            redirect('/boats');
        endif;
    }

    public static function typeIndex()
    {
        global $conn;

        $content['model'] = false;
        $extracontent['types'] = false;

        $models = $conn->read('models');

        $types = $conn->read('boattype');


        if (!empty($model)) :
            $content['models'] = $models;
        endif;

        if (!empty($types)) :
            $extracontent['types'] = $types;
        endif;

        require(new ViewModel())->extendPath('views/admin/boattype.view.php', $content, $extracontent);
    }

    public static function newTypeIndex()
    {
        require(new ViewModel())->extendPath('views/admin/new-type.view.php');
    }

    public static function newBoat()
    {
        global $conn;

        $content['types'] = false;

        $types = $conn->read('boattype');

        if (!empty($types)) :
            $content['types'] = $types;
        endif;

        require(new ViewModel())->extendPath('views/admin/new-model.view.php', $content);
    }

    public static function editBoat($id)
    {
        global $conn;

        $content['model'] = false;
        $extracontent['types'] = false;

        $model = ($conn->getById($id, 'models'))[0];

        $types = $conn->read('boattype');

        if (!$model) :
            redirect('/boats');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        if (!empty($types)) :
            $extracontent['types'] = $types;
        endif;

        require(new ViewModel())->extendPath('views/admin/edit-model.view.php', $content, $extracontent);
    }

    public static function new()
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
            'type' => htmlspecialchars($_POST['type']),
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
            !empty($data['status'])
        ) :
            $submission = (new Boat())->new($data);

            $tempname = $_FILES['fotos']['tmp_name'];
            $folder = "public/img/" . $data['images'];

            if ($submission && move_uploaded_file($tempname, $folder)) :
                redirect('/boats');
                exit;
            endif;

            redirect('/error');
            exit;
        endif;

        redirect('/error');
    }

    public static function edit()
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
            $submission = (new Boat())->edit($data);

            if ($submission) :
                redirect("/boats");
                exit;
            endif;

            redirect("/error");
            exit;
        endif;

        redirect("/error2");
    }

    public static function newType()
    {
        $data = array(
            'type' => htmlspecialchars($_POST['type']),
        );

        if (
            !empty($data) &&
            !empty($data['type'])
        ) :
            $submission = (new Boat())->newType($data);

            if ($submission) :
                redirect('/boattype');
                exit;
            endif;

            redirect('/error');
            exit;
        endif;

        redirect('/error2');
    }

    public static function editType()
    {
        $data = array(
            'id' => $_POST['id'],
            'type' => htmlspecialchars($_POST['type']),
        );
        if (
            !empty($data) &&
            !empty(($data['id'])) &&
            !empty(($data['type']))
        ) :
            $submission = (new Boat())->editType($data);

            if ($submission) :
                redirect("/boattype");
                exit;
            endif;

            redirect("/error");
            exit;
        endif;

        redirect("/error2");
    }

    public static function delete($id)
    {
        global $conn;

        $deleted = $conn->delete($id, 'models');

        if (!$deleted) :
            redirect('/boats');
            exit;
        endif;

        redirect("/error");
    }
    public static function deleteType($id)
    {
        global $conn;

        $deleted = $conn->delete($id, 'boattype');

        if (!$deleted) :
            redirect('/boattype');
            exit;
        endif;

        redirect("/error");
    }
}
