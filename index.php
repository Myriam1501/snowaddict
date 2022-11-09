<?php


    require_once('controllers/homepageController.php');
    require_once('controllers/figureController.php');


        if(isset($_GET['action']) && '' !== $_GET['action']) {
            $action = $_GET['action'];
            
            if ('figure' === $_GET['controller']) {
                $figureController = new FigureController();

                if ('create' === $action) {
                    $figureController->create();
                }
                if ('list' === $action) {
                    $figureController->list();
                }
<<<<<<< HEAD
                if ('update' === $action) {
                    $figureController->update();
=======

                if ('update' === $action) {
                    if (!array_key_exists('id', $_GET)) {
                        throw new \Exception('Id parameter is mandatory');
                    }

                    $figureController->update($_GET['id']);
>>>>>>> 8985026f68755f2a4dca0d67e7615d826fac5d9e
                }
            }
        } else {
            (new HomepageController())->home();
        }



?>