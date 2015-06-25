<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>404 - Not Found (BOFH)</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bofh.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
				<h4>"
				<?php
				error_reporting( E_ALL );
				$filename = 'excuses.txt';
					if (file_exists($filename)) 
						{
							$excuse_file = file("$filename");
							echo $excuse_file[array_rand($excuse_file)];
						} 
					else 
						{
							echo "The file $filename does not exist";
						}
				?>
				"</h4>
                </div>
                <div class="error-actions">
                    <a href="http://www.logicminds.net" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="http://www.logicminds.net" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
						<br><a href="<?php $_SERVER['PHP_SELF']; ?>">another excuse</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="hjquery-2.1.4/jquery-2.1.4.min"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  </body>
</html>