<?php ob_start(); ?>

<div class="container mb-3">
    
  <?php if($isSSent) { ?>
    <div class="alert alert-success" role="alert">
      Votre figure a bien été Modifier.
    </div>
  <?php } ?>
    
  <form  method="post">
 
    
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $figure['name']; ?>" >
    </div>

    <div class="form-floating">
      <textarea class="form-control" placeholder="Description" name="description" value="<?php echo $figure['description']; ?>" ></textarea>
      <label for="description">Description</label>
    </div>

    <div class="mb-3">
      <label for="picture" class="form-label">Picture path</label>
      <input type="text" class="form-control" id="picture" name="picture" value="<?php echo $figure['picturePath']; ?>">
    </div>

    <div class="mb-3">
      <label for="video" class="form-label">Video path</label>
      <input type="text" class="form-control" id="video" name="video" value="<?php echo $figure['videoPath']; ?>">
    </div>

    <button type="submit" class="mb-3 btn btn-primary">update</button>
  </form>
  
</div>


<?php $content = ob_get_clean(); ?>

<?php require_once('views/layout.php'); 
/*

<div class="mb-3">
      <label for="name" class="form-label">la Table que vous voulez modifiez : </label>
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
            <th scope="col">Modification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">
                <?= $figure['id']; ?>
            </th>
            <td>
                <?= $figure['name']; ?>
            </td>
            <td>
                <?= $figure['description']); ?>
            </td>
            <td>
                <?= $figure['picturePath']; ?>
            </td>
            <td>
                <?= $figure['videoPath()']; ?>
            </td>
            <td>
                <?= $figure[createdAt]; ?>
            </td>
            <td>
                <?= $figure[updatedAt]; ?>
            </td>
        </tbody>
        </table>
    </div> 
*/
?>
