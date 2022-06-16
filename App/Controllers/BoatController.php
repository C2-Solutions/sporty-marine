<?php

class BoatController
{
    protected $boat;
    protected $pdo;
    protected $conn;

    public function __construct()
    {
        global $pdo;
        global $conn;

        $this->pdo = $pdo;
        $this->pdo = $conn;
        $this->boat = new Boat();
    }

    public static function index()
    {
        global $conn;

        $content['models'] = false;

        $models = $conn->read('models');

        if (!empty($models)) :
            $content['models'] = $models;
        endif;

        if (empty(IsAdmin())) {
             $content = null;
        }

        require(new ViewModel())->extendPath("views/boats.view.php", $content);
    }

    public static function boatInformation($id)
    {
        global $conn;

        $content['model'] = false;

        $model = $conn->getById($id, 'models');

        if (!$model) :
            redirect('/boats');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
            echo '<pre>', var_dump($content), '</pre>';

        endif;

//        if ($model['availability'] == 1) :
            require(new ViewModel())->extendPath('views/' . PAGE_NAME . '.view.php', $content);
//        else :
//            redirect('/boats');
//        endif;
    }

    public static function newModel()
    {
        view('admin/new-model');
    }

    public static function editModel($id)
    {
        $content['model'] = false;

        $model = self::$conn->getById($id, 'models');

        if (!$model) :
            redirect('/admin-modellen');
            exit;
        endif;

        if (!empty($model)) :
            $content['model'] = $model;
        endif;

        view('admin/edit-model', $content);
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
            $submission = self::$boat->new($data);

            if ($submission) :
                $_SESSION['modelsent'] = true;
                redirect('/admin-modellen');
                exit;
            endif;

            redirect('/error');
            exit;
        endif;

        redirect('/error2');
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
            $submission = self::$boat->edit($data);

            if ($submission) :
                redirect("/admin-modellen");
                exit;
            endif;

            redirect("/error");
            exit;
        endif;

        redirect("/error2");
    }

    public static function delete($id)
    {
        $deleted = self::$conn->delete($id, 'models');

        if ($deleted) :
            return redirect('/admin-modellen');
        endif;

        echo 'error';
    }
}
