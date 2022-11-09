<?php ob_start(); ?>

<<<<<<< HEAD
<div class="container mb-3">
  <form action="/snowaddict/index.php?action=create&controller=figure" method="post">
  <table class="table">
  <thead>
    <tr>
      <td scope="row">Name</td>
      <td scope="col">Description</td>
      <td scope="col">picturePath</td>
      <td scope="col">videoPath</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php for ($i=0; $i < count($figures); $i++) { 
  echo"<tr class=\"tdst-group tdst-group-horizontal-sm\">";
      echo "<td scope=\"row\">". $figures[$i]->getName()."</td>";
      echo "<td scope=\"col\">".$figures[$i]->getDescription()."</td>";
      echo "<td scope=\"col\">".$figures[$i]->getPicturePath()."</td>";
      echo "<td scope=\"col\">".$figures[$i]->getVideoPath()."</td>";
    echo"</tr>";
    }
    ?>
  </tbody>

</table>
  



<?php $content = ob_get_clean(); ?>

<?php require_once('views/layout.php'); ?>
=======
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Picture path</th>
      <th scope="col">Video path</th>
      <th scope="col">Created date</th>
      <th scope="col">Updated date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($figures as $figure) { ?>
    <tr>
      <th scope="row">
        <?= $figure->getId(); ?>
      </th>
      <td>
        <?= $figure->getName(); ?>
      </td>
      <td>
        <?= $figure->getDescription(); ?>
      </td>
      <td>
        <?= $figure->getPicturePath(); ?>
      </td>
      <td>
        <?= $figure->getVideoPath(); ?>
      </td>
      <td>
        <?= $figure->getCreatedAt(); ?>
      </td>
      <td>
        <?= $figure->getUpdatedAt(); ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require_once('views/layout.php'); ?>
>>>>>>> 959df8667db97efef9f899e90d32bc00043cc173
