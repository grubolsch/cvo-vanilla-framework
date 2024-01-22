<?php

namespace Controller;

use Model\User;

class HomepageController
{
    // ALLEEN controllers mogen werken met superglobals (zoals POST, GET)
    public function render()
    {
        $pdo = new \PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // OPTIONEEL

        if(empty($_POST['email'])) {
            $error = 'Je moet een email invullen';
        }

        if(empty($_POST['name'])) {
            $error = 'Je moet een name invullen';
        }

        if(!isset($error)) {
            $user = new User($_POST['email'], $_POST['name']);
            $user->save($pdo);
        }

        require 'View/homepage.php';
    }
}
