<?php

session_start();

$page = getPageName(true);
$conn = DatabaseConfiguration::setConnection();

if (false === isAdmin()) :
    switch ($page) {
        case 'admin-dashboard':
        case 'admin-modellen':
        case 'edit-model':
        case 'delete-model':
        case 'admin-contacts':
        case 'admin-contact':
        case 'delete-contact':
            redirect('/');
            break;
    }
endif;
