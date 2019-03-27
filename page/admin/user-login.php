<!DOCTYPE html>
<html>
	<head>
		<title>User Login</title>
		<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../resources/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="../../resources/css/jquery.dataTables.min.css"/>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="../../admin.php">ADMIN <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">User login</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
			Launch demo modal
			</button>
			<!-- data table -->
			<div id="content">
				<div class="table-responsive"><br>
					<table id="myTable" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Username</th>
								<th>Password</th>
								<th>Level</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Opsi</th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah User Petugas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- isi modal -->
							<form method="post" action="req-u/proses-tambah.php">
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="text" class="form-control" id="username" name="form_usname" placeholder="Username">
									<small id="emailHelp" class="form-text text-muted">Masukan Username Anda</small>
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect2">Sebagai</label>
									<select class="form-control" name="form_lvl">
										<option value="USER_1">USER</option>
										<option value="ADMIN_1">ADMIN</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" name="form_tambah" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="editor"></div>
		<button id="cmd">generate PDF</button>
		<?= __DIR__ ?>
	</body>
	<script src="../../resources/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/js/popper.min.js"></script>
	<script src="../../resources/js/jquery.dataTables.min.js"></script>
	<script src="user.js"></script>
</html>