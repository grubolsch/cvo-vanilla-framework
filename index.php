<?php

use App\Controller\HomepageController;
use App\Controller\ViewUserController;

require 'config.php';

require 'vendor/autoload.php';

switch ($_GET['path'] ?? 'homepage') {
    case 'homepage':
        $controller = new HomepageController();
        $controller->render();
        break;
    case 'view-user':
        $controller = new ViewUserController();
        $controller->render();
        break;
}
