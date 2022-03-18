<?php
include '../layout/header.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Brand</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text"> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="jumbotron">
				<h2>
					Hello, Again!
				</h2>
				<p>
                Ini adalah tugas praktikum ke 3 ya ges ya
            </p>
				<p>
					<a class="btn btn-primary btn-large" href="https://getbootstrap.com/">Go to get bootstrap</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h2>
				Pemrograman Web 2
			</h2>
			<p>
            Ini adalah sebuah mata kuliah yang membahas bagaimana kita membangun sebuah website dari mulai html sampai kepada bahasa PHP yang seperti dipelajari ini
        </p>
			<p>
				<a class="btn" href="https://elena.nurulfikri.ac.id/course/view.php?id=1309">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Basis Data
			</h2>
			<p>
            Merupakan sebuah matakuliah yang mempelajari bagaimana mengolah data untuk kemudian diaplikasikan kedalam sebuah database
        </p>
			<p>
				<a class="btn" href="https://elena.nurulfikri.ac.id/course/view.php?id=1287">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				UI/UX
			</h2>
			<p>
            Mata kuliah satu ini mempelajari bagaimana kita akan membuat tampilan applikasi ataupun website kita nyaman digunakan oleh pengguna
        </p>
			<p>
				<a class="btn" href="https://elena.nurulfikri.ac.id/course/view.php?id=1280">View details »</a>
			</p>
		</div>
	</div>
</div>
<hr>
<?php
include '../layout/footer.php';
?>