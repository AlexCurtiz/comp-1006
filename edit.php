<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php require_once('_utilities/_connect.php') ?>

<!DOCTYPE html>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Select the row using the provided ID.
    3: Add the missing hidden field.
    4: Pre-populate the form with the values from the selected row.
    5: Ensure you're sending the form data to the update.php page.
-->

<header>
  <h1 class="display-1">Edit Vegetables</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/vegetables/insert.php' method='post'>
	<div class='form-group'>
		<label>Name</label>
		<input class="form-control" type="text" name="name">
	</div>

	<div class='form-group'>
		<label>Colour</label>
		<input class="form-control" type="text" name="colour">
	</div>

	<div class='form-group'>
		<label>Price</label>
		<input class="form-control" type="number" name="price">
	</div>

	<div class='form-group'>
		<label>Action</label>
		<input class="form-control" type="number" name="action">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>
</div>
  </body>
</html>
