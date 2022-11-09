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
        $createdAt = $figure->getCreatedAt();

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':picturePath', $picturePath);
        $stmt->bindParam(':videoPath', $videoPath);
        $stmt->bindParam(':createdAt', $createdAt);

        $stmt->execute();
    }

    public function list(): array
    {
        $stmt = $this->databaseConnection->prepare('SELECT * FROM figure');

        $stmt->execute();
        $results = $stmt->fetchAll();

        $figures = [];

        foreach($results as $result) {
            $figure = new Figure();
            $figure->setId($result['id']);
            $figure->setName($result['name']);
            $figure->setDescription($result['description']);
            $figure->setPicturePath($result['picturePath']);
            $figure->setVideoPath($result['videoPath']);
            $figure->setCreatedAt(new \DateTime($result['createdAt']));
            $figure->setUpdatedAt($result['updatedAt'] !== null ? new \DateTime($result['updatedAt']) : null);

            $figures[] = $figure; 
        }
        return $figures;
        
    }

<<<<<<< HEAD
    public function update(): array{
        $stmt = $this->databaseConnection->prepare('UPDATE `figure` SET `id`=:id,`name`=:name,`description`=:description,`picturePath`=:picturePath,`videoPath`=:videoPath,`updatedAt`=:update');
        $id = $_GET['id'];
        $results = $this->afficheColonne($id);
        var_dump($result);

        $name = $results['name'];
        $description = $results['description'];
        $picturePath = $results['picturePath'];
        $videoPath = $results['videoPath'];

        $updatedAt = (new \DateTime())->format('Y-m-d H:i:s');
        
=======
    public function findById(int $figureId): Figure
    {
        $stmt = $this->databaseConnection->prepare('SELECT * FROM figure WHERE id = :id');

        $stmt->bindParam(':id', $figureId);
        $stmt->execute();

        $result = $stmt->fetch();

        $figure = new Figure();
        $figure->setId($result['id']);
        $figure->setName($result['name']);
        $figure->setDescription($result['description']);
        $figure->setPicturePath($result['picturePath']);
        $figure->setVideoPath($result['videoPath']);

        return $figure;
    }

    function update(Figure $figure): void
    {
        $stmt = $this->databaseConnection->prepare('UPDATE figure SET name = :name, description = :description, videoPath = :video, picturePath = :picture, updatedAt = :updatedAt where id = :id');

        $id = $figure->getId();
        $name = $figure->getName();
        $description = $figure->getDescription();
        $picturePath = $figure->getPicturePath();
        $videoPath = $figure->getVideoPath();
        $updatedAt = $figure->getUpdatedAt();
>>>>>>> 8985026f68755f2a4dca0d67e7615d826fac5d9e

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
<<<<<<< HEAD
        $stmt->bindParam(':picturePath', $picturePath);
        $stmt->bindParam(':videoPath', $videoPath);

        $stmt->bindParam(':updatedAt', $updatedAt);

        $stmt->execute();
        return afficheColonne($id);

    }
    public function afficheColonne(string $id): array
    {
        $valAll = $this->databaseConnection->prepare('SELECT `id`, `name`, `description`, `picturePath`, `videoPath`, `createdAt`, `updatedAt` FROM `figure` WHERE `id`=:id');
        
        $valAll->bindParam(':id',$id);
        $valAll->execute();
        $results = $valAll->fetch();
        return $results;
    }
=======
        $stmt->bindParam(':picture', $picturePath);
        $stmt->bindParam(':video', $videoPath);
        $stmt->bindParam(':updatedAt', $updatedAt);

        $stmt->execute();
    }

>>>>>>> 8985026f68755f2a4dca0d67e7615d826fac5d9e
    public function setConnection(\PDO $databaseConnection): self
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }


}
