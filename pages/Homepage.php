<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	-->
	<link href="../bootstrap-5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Lost and Found</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#656666!important">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="color:white">Lost and Found &nbsp;&nbsp;&nbsp;&nbsp;</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<!--<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"style="color:white">Home</a>
					</li>-->
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:white">
							Add Lost/Found
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="lost.php">Add Lost item</a></li>
							<li><a class="dropdown-item" href="found.php">Add Found item</a></li>
						</ul>
					</li> 
					
					<li class="nav-item">
						<a class="nav-link" href="message.php"style="color:white">&nbsp;Messages</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="about.php"style="color:white">&nbsp;About</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contactus.php"style="color:white">&nbsp;Contact us</a>
					</li>
				</ul>
				
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit" style="color:white!important;border-color:white;">Search</button>
				</form>
			</div>
		</div>
	</nav>
	
	<!-- left side box -->
	<div class="container-fluid" style="background-color:lightgrey; float:left;">
	
		<div class="row">
			<div class="col-sm">
				One of three columns
			</div>
		</div>
	</div>
	
	<div class="container-fluid" style="background-color:lightgrey; float:right;">
		<div class="row">	
			<div class="col-sm">
				One of three columns
			</div>
		</div>
	</div>
	
	
		<!--   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		-->
		<script type="text/javascript" src="../bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>