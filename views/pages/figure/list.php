<?php ob_start(); ?>

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
