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
                if ('update' === $action) {
                    $figureController->update();
                }
            }
        } else {
            (new HomepageController())->home();
        }



?>