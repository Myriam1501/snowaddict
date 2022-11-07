<?php
require_once('models/figure.php');

final class FigureRepository
{
    private $databaseConnection = null;

    public function create(Figure $figure): void
    {
<<<<<<< HEAD
        $stmt = $dbh->prepare("INSERT INTO REGISTRY (id, name, description, picturePath, videoPath, createdAt, deletedAt, updatedAt) VALUES (:id, :name,:description, :picturePath, :videoPath, :createdAt, :deletedAt, :updatedAt)");
        $stmt->bindParam(':id', $figure.getId());
        $stmt->bindParam(':name', $figure.getId());
        $stmt->bindParam(':description', $figure.getDescription());
        $stmt->bindParam(':picturePath', $figure.getPicturePath());
        $stmt->bindParam(':videoPath', $figure.getVideoPath());
        $stmt->bindParam(':createdAt', $figure.getCreatedAt());
        $stmt->bindParam(':deletedAt', $figure.getDeletedAt());
        $stmt->bindParam(':valupdatedAtue', $figure.getUpdatedAt());

        $stmt->execute();
        echo 'Hello';die;
    }

    public function setConnection(\PDO DatabaseConnection $databaseConnection): self
=======
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

    public function setConnection(\PDO $databaseConnection): self
>>>>>>> 697fd5fae0b7cae19da4d579a7b342167eaf4aa2
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }


}
