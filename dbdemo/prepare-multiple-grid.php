<?php
// add connection file
$searchTerm = "%".$_GET['filmName']."%";
$sql= "SELECT * FROM movies WHERE filmName LIKE :filmName";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmName', $searchTerm, PDO::PARAM_STR); 
$stmt->execute();
$totalnoFilms = $stmt->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>SEARCH / MULTIPLE RESULTS Query Using a prepare statement</title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/styles.css" rel="stylesheet">
		  <style>
			  .myFlex{
				  display: flex;
				  flex-wrap: wrap;
			  }
			  .myFlex>div{
				  flex-basis:25%;
				  padding:30px;
			  }
		  </style>
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
        <h1>SEARCH / MULTIPLE RESULTS Query <small>Using a prepare statement</small></h1>
      </div>
	
	
		<form>
			<div class="form-group row">
				<label for="filmID" class="col-md-2 col-form-label">Search by Film Name:</label>
				<div class="col-md-2">
					<input type="text" class="form-control" id="filmName" name="filmName">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</form>
	
    <div class="myFlex">
            
					<?php 
					if($totalnoFilms > 0){
							while($row = $stmt->fetchObject()){
								$timestampDate = strtotime($row->releaseDate);
								$displayDate = date("D d M Y", $timestampDate);
								echo "<div class=\"\">";
								echo "<p><img src=\"images/{$row->filmImage}\" class=\"img-responsive center-block img-rounded\"></p>";
								echo "<h3 class=\"filmTitle\">{$row->filmName} <small>{$row->filmCertificate}</small>";
								echo "<br><small>{$displayDate}</small></h3>";
								echo "</div>";
						}
					}
                    ?>
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