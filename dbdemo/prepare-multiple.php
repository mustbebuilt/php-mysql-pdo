<?php
// connection and query logic
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
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="select-single.php">One Result</a></li>
                <li><a href="select-multiple.php">Mulitple Results</a></li>
                <li><a href="prepare-single.php">Prepare One Result</a></li>
                <li><a href="prepare-multiple.php">Prepare Multi Results</a></li>
            </ul>
          </div>
      </div>
      </nav>
      <div class="page-header">
        <h1>SEARCH / MULTIPLE RESULTS Query <small>Using a prepare statement</small></h1>
      </div>
    <div class="row">
        <div class="col-md-12">
            <form id="form1" name="form1" method="get" action=""class="form-inline">
             <div class="form-group">
             		<p><label for="filmName">Film Name</label>: 
                    <input name="filmName" type="text" id="filmName" class="form-control">
                    <input type="submit" name="submit" class="btn btn-default">
                 	</p>
            </div>
            </form>
        </div>
    </div>
    <div class="class">
            <div class="col-md-12">
					<?php 
					   // search results
                    ?>
            </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2016 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>