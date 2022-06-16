<?php

require_once("App/Models/ContactModel.php");

class ContactController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/contact.view.php');
    }

    public static function adminContactIndex()
    {
        global $conn;

        $content['contacts'] = false;

        $contacts = $conn->read('contact');

        if (!empty($contacts)) :
            $content['contacts'] = $contacts;
        endif;

        view('admin/contacts', $content);
    }

    public static function contactInformation($id)
    {
        global $conn;

        $content['contact'] = false;

        $contact = $conn->getById($id, 'contact');

        if (!$contact) :
            redirect('/admin-contacts');
            exit;
        endif;

        if (!empty($contact)) :
            $content['contact'] = $contact;
        endif;

        view('admin/contact', $content);
    }

    public static function createNew()
    {
        $data = array(
            'name' => htmlspecialchars($_POST['name']),
            'email' => htmlspecialchars($_POST['email']),
            'phone' => htmlspecialchars($_POST['phone']),
            'message' => htmlspecialchars($_POST['message'])
        );

        if (
            !empty($data) &&
            !empty($data['name']) &&
            !empty($data['email']) &&
            !empty($data['message'])
        ) :
            // Error: Call to a member function new() on null
            $submission = (new Contact())->new($data);

            if ($submission) :
                $_SESSION['contactsent'] = true;
                 redirect('/contact');
                exit();
            endif;

            redirect('/contact');
        endif;

        redirect('/contact');
    }

    public static function delete($id)
    {
        global $conn;

        $deleted = $conn->delete($id, 'contact');

        if ($deleted) :
            return redirect('/admin-contacts');
            exit;
        endif;

        echo 'error';
    }
}
