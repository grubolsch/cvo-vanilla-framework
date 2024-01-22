<?php

require 'config.php';

switch ($_GET['path'] ?? 'homepage') {
    case 'homepage':
        $controller = new \Controller\HomepageController();
        $controller->render();
        break;
    case 'view-user':
        $controller = new \Controller\ViewUserController();
        $controller->render();
        break;
}
