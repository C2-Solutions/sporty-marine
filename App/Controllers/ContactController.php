<?php

require_once("App/Models/ContactModel.php");

class ContactController
{
    public static function index()
    {
        global $conn;

        $content['contacts'] = false;

        $contacts = $conn->read('contact_inquiries');

        if (!empty($contacts)) :
            $content['contacts'] = $contacts;
        endif;

        if (!empty(IsAdmin())) {
            require(new ViewModel())->extendPath("views/admin/contacts.view.php", $content);
            exit;
        }

        require(new ViewModel())->extendPath('views/contact.view.php');
    }

    public static function contactInformation($id)
    {
        global $conn;

        $content['contact'] = false;

        $contact = $conn->getById($id, 'contact_inquiries')[0];

        if (!$contact) :
            redirect('/contact');
            exit;
        endif;

        if (!empty($contact)) :
            $content['contact'] = $contact;
        endif;

        require(new ViewModel())->extendPath("views/admin/contact.view.php", $content);
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

        $deleted = $conn->delete($id, 'contact_inquiries');

        if (!$deleted) :
            return redirect('/admin-contacts');
            exit;
        endif;

        redirect("/error");
    }
}
