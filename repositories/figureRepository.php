<?php
<<<<<<< HEAD
I DON \'T KNOWWW
=======

require_once('models/figure.php');
require_once('lib/database.php');

final class FigureRepository
{
    private $databaseConnection = null;

    public function create(Figure $figure): void
    {
        echo 'Hello';die;
    }

    public function setConnection(DatabaseConnection $databaseConnection): self
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }
}
>>>>>>> 334ff060879b9d3253def20c73e599a7fdf68ed5
