<?php 
// connection and query logic
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Query with Multiple Results</title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PHP/MySQL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="select-single.php">One Result</a>
      <a class="nav-item nav-link" href="select-multiple.php">Mulitple Results</a>
      <a class="nav-item nav-link" href="prepare-single.php">Prepare One Result</a>
	  <a class="nav-item nav-link" href="prepare-multiple.php">Prepare Multi Results</a>
    </div>
  </div>
</nav>
      <div class="page-header">
        <h1>SELECT Multi Rows <small>Using LIKE</small></h1>
        <h2>Query with Multiple Results</h2>
      </div>
    <div class="row">
        <div class="col-md-12">
          <ul>
              <?php
                  // output loop here
              ?>
          </ul>
        </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2018 mustbebuilt.co.uk</p>
      </div>
</footer>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>