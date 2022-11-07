<?php
require_once('models/figure.php');
require_once('lib/database.php');

final class FigureRepository
{
    private $databaseConnection = null;

    public function create(Figure $figure): void
    {
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
    {
        $this->databaseConnection = $databaseConnection;

        return $this;
    }


}
