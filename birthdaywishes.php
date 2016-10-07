<!DOCTYPE html>
<html lang="en">
   <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Birthday Wishes | Sri Latha | IamSaiSudheer.com</title>

		<link rel="icon" type="image/icon" href="img/favicon.ico">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/iamsaisudheer-style.css" rel="stylesheet">
		<link href="font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
	</head>

	<body class="bday-content-image">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
					<p class="bday-para">
						I am very happy &amp; thankful, bcoz
					</p>

					<p class="bday-para">
						 I have such a good friend like U.
					</p>

					<p class="bday-para">
  						We share funny moments, We share tears.
  					</p>
					
					<?php 
						if(htmlspecialchars($_GET["q"])):
							$name = htmlspecialchars($_GET["q"]);
						else:
							$name = "Sri Latha";
						endif;
					?>

					<p class="bday-para">
						Wishing you the most wonderful Birthday <span class="author"><?php echo $name; ?> !</span>
					</p>
					
					<p class="bday-para pull-right">
						Iam <span class="author">Sai Sudheer</span> <i class="fa fa-heartbeat" aria-hidden="true"></i>
					</p>
				</div>
			</div>
		</div>

		<div class="bday-copyright hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy; IamSaiSudheer 2016</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>