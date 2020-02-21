<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">New Vegetable</h1>
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

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>