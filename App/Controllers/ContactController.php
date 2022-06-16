<?php

class ContactController
{
    public $contacts;

    public function __construct()
    {
        $this->contacts = new Contact();
    }

    public function index()
    {
        require(new ViewModel())->extendPath('views/contact.view.php');
    }

    public function adminContactIndex()
    {
        $content['contacts'] = false;

        $contacts = $this->database->getAll('contact');

        if (!empty($contacts)) :
            $content['contacts'] = $contacts;
        endif;

        view('admin/contacts', $content);
    }

    public function contactInformation($id)
    {
        $content['contact'] = false;

        $contact = $this->database->getById($id, 'contact');

        if (!$contact) :
            redirect('/admin-contacts');
            exit;
        endif;

        if (!empty($contact)) :
            $content['contact'] = $contact;
        endif;

        view('admin/contact', $content);
    }

    public function new()
    {
        $data = array(
            'name' => htmlspecialchars($_POST['name']),
            'email' => htmlspecialchars($_POST['email']),
            'phone' => htmlspecialchars($_POST['phone']),
            'message' => htmlspecialchars($_POST['message'])
        );

        if (
            is_array($data) &&
            !empty($data) &&
            !empty($data['name']) &&
            !empty($data['email']) &&
            !empty($data['message'])
        ) :
            $submission = $this->contacts->new($data);

            if ($submission) :
                $_SESSION['contactsent'] = true;
                // redirect('/contact'); // TODO: redirect to other page
                exit();
            endif;

            redirect('/contact');
        endif;

        redirect('/contact');
    }

    public function delete($id)
    {
        $deleted = $this->database->delete($id, 'contact');

        if ($deleted) :
            return redirect('/admin-contacts');
            exit;
        endif;

        echo 'error';
    }
}
