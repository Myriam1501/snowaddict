<?php

require_once('models/figure.php');
require_once('lib/database.php');
require_once('repositories/figureRepository.php');

final class FigureController
{
    private FigureRepository $figureRepository;

    function __construct()
    {
        $this->figureRepository = new FigureRepository();

        $this->figureRepository->setConnection((new DatabaseConnection())->getConnection());
    }

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

            $this->figureRepository->create($figure);
        }

        require_once('views/pages/figure/create.php');
    }

    function read()
    {


    }

    function update(int $figureId): void
    {
<<<<<<< HEAD
        $isSSent = false;
        $figureRepository = new FigureRepository();
        $figureRepository->setConnection((new DatabaseConnection())->getConnection());
        $figure = $figureRepository->afficheColonne($_GET['id']);

         if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $isSSent = true;
            $figure = new Figure();
            $figure->setName($_POST['name']);
            $figure->setDescription($_POST['description']);
            $figure->setPicturePath($_POST['picture']);
             $figure->setVideoPath($_POST['video']);
             $figureRepository = new FigureRepository();
            $figureRepository->setConnection((new DatabaseConnection())->getConnection());
            $figures = $figureRepository->update($figure);
           
        } 
        require_once('views/pages/figure/update.php');
=======
        $isSent = false;

        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $figure = new Figure();
            $figure->setId($figureId);
            $figure->setName($_POST['name']);
            $figure->setDescription($_POST['description']);
            $figure->setPicturePath($_POST['picture']);
            $figure->setVideoPath($_POST['video']);
            $figure->setUpdatedAt(new \DateTime());

            $this->figureRepository->update($figure);

            $isSent = true;
        } else {
            $figure = $this->figureRepository->findById($figureId);
        }
>>>>>>> 8985026f68755f2a4dca0d67e7615d826fac5d9e

        require_once('views/pages/figure/update.php');
    }

    function delete()
    {

    }

    function list()
    {
        $isClick = false;
        $figureRepository = new FigureRepository();
        $figureRepository->setConnection((new DatabaseConnection())->getConnection());

        $figures = $figureRepository->list();

    
        require_once('views/pages/figure/list.php');
    }

}

