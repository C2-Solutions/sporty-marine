<?php

session_start();

$page = getPageName(true);
$conn = DatabaseConfiguration::setConnection();

if (false === isAdmin()) :
    switch ($page) {
        case 'admin-dashboard':
        case 'admin-modellen':
        case 'admin-contacts':
            redirect('/');
            break;
    }
endif;
