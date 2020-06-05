<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>VNotes</title>

	<style>
		#searchTxt {
			-webkit-transition: all 2s ease-in;
			-moz-transition: all 2s ease-in;
			transition: all 2s ease-in;
		}

		#searchTxt:focus {
			width: 600px;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">VNotes</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" id="searchTxt" type="search" placeholder="Search"
					aria-label="Search">
			</form>
		</div>
	</nav>

	<div class="container my-2">
		<h1>Welcome to VNotes</h1>

		<div class="card my-2">
			<div class="card-body">
				<div class="form-group">
					<h5 class="card-title">Title</h5>
					<input type="text" class="form-control" id="addTitle" aria-describedby="title" maxlength="25">
				</div>

				<h5 class="card-title">Note :</h5>
				<div class="form-group">
					<textarea class="form-control" name="text" id="addTxt" oninput="checkBtn();" rows="3"></textarea>
				</div>
				<button href="#" class="btn btn-primary" id="addBtn">Add Note</button>
			</div>
		</div>

		<h3 class="my-2">Your Notes</h3>

		<div class="row container-fluid" id="notes">

			<!-- Demo Card
			<div class="card border-dark shadow-lg mb-2 mx-2 noteCard" style="width: 18rem;">
				<div class="card-header h5">title</div>
				<div class="card-body text-dark">
					<p class="card-text">note body</p>
				</div>
				<div class="card-footer text-muted">date <i class="fa fa-trash float-right" style="font-size: 24px;cursor: pointer;"></i> </div>
			</div> -->

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>

</html>
