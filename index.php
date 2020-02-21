<?php require_once('./_config.php');
      include('_partials/_header.php');
      ?>


<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Fetch all the vegetables rows from the database and display them in a table.
    3: Create two links for each row that point to the edit.php and delete.php files. These links must provide a query parameter called 'id' with the row's id column's value.
-->

  <body>
    <?php include_once('_partials/_nav.php') ?>
    <hr>
    <div class="container">
<header>
  <h1 class="display-1">Vegetables</h1>
  <hr>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
			<th>Colour</th>
			<th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
  <?php
            echo "<a href='./edit.php'>edit</a>";
            echo "|"; 
            echo "<a href='./delete.php'>delete</a>";
        ?>

  </tbody>
</table>
</div>
  </body>
</html>
<?php 
  include('_partials/_footer.php');
  ?>
