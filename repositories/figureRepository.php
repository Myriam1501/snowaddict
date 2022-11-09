<?php
require_once('models/figure.php');

final class FigureRepository
{
    private $databaseConnection = null;

    public function create(Figure $figure): void
    {
        $stmt = $this->databaseConnection->prepare('INSERT INTO figure (name, description, picturePath, videoPath, createdAt) VALUES (:name, :description, :picturePath, :videoPath, :createdAt)');

        $name = $figure->getName();
        $description = $figure->getDescription();
        $picturePath = $figure->getPicturePath();
        $videoPath = $figure->getVideoPath();
        $createdAt = $figure->getCreatedAt()->format('Y-m-d H:i:s');

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':picturePath', $picturePath);
        $stmt->bindParam(':videoPath', $videoPath);
        $stmt->bindParam(':createdAt', $createdAt);

        $stmt->execute();
    }
    public function list(Figure $figure): array
    {
        $stmt = $this->databaseConnection->query('SELECT * FROM `figure`');
        $stmt->execute();
        $figure=[];
        foreach($stmt->fetchAll() as $result) {
            $object=new Figure();
            //var_dump($result);
            $object->setName($result['name']);
            $object->setDescription($result['description']);
            $object->setPicturePath($result['picturePath']);
            $object->setVideoPath($result['videoPath']);
            $figure[]=$object;
        }
    
        return $figure;
        
    }

    public function setConnection(\PDO $databaseConnection): self
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }


}
