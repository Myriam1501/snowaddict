<?php

require_once('models/figure.php');
require_once('lib/database.php');
require_once('repositories/figureRepository.php');

final class FigureController
{
    function create(): void
    {
        $isSent = false;

        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $isSent = true;

            $figure = new Figure();
            $figure->setName($_POST['name']);
            $figure->setDescription($_POST['description']);
            $figure->setPicturePath($_POST['picture']);
            $figure->setVideoPath($_POST['video']);

            $figureRepository = new FigureRepository();
            $figureRepository->setConnection((new DatabaseConnection())->getConnection());

            $figureRepository->create($figure);
        }

        require_once('views/pages/figure/create.php');
    }

    function read()
    {


    }

    function update()
    {

    }

    function delete()
    {

    }

    function list()
    {
<<<<<<< HEAD
    
        
        $figure = new Figure();

        $figureRepository = new FigureRepository();
        $figureRepository->setConnection((new DatabaseConnection())->getConnection());

        $figures=$figureRepository->list($figure);
        require_once('views/pages/figure/list.php');

       
=======
        $figureRepository = new FigureRepository();
        $figureRepository->setConnection((new DatabaseConnection())->getConnection());

        $figures = $figureRepository->list();

        require_once('views/pages/figure/list.php');
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173
    }
}

