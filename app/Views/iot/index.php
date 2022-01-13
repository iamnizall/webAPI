<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IoT ku</title>
	<link rel="stylesheet" href="<?= base_url('mdb/css/mdb.min.css') ;?>">
	<link rel="stylesheet" href="<?= base_url('style.css') ;?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
	<!-- The sidebar -->
	<div class="sidebar">
		<a class="active" href="#home"><i class="fa fa-home"></i> Dashboard</a>
		<a href="#news"><i class="fa fa-users"></i> Team</a>
	</div>

	<!-- Page content -->
	<div class="content">
		<div class="row mb-2 mt-2">
			<div class="card">
				<div class="card-body"><i class="fa fa-book"></i> IoT/<a href="">Dashboard</a></div>
			</div>
		</div>
		<div class="container">
			<div class="row ">
				<div class="col-md-3 mb-2">
					<div class="card">
						<div class="card-body">
							sensor suhu
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<div class="card-body">
							sensor kelembapan udara
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<div class="card-body">
							sensor teekanan udara
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<div class="card-body">
							sensor CO2
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div  class="datatable">
						<table>
							<thead>
								<tr>
									<th class="th-sm">Name</th>
									<th class="th-sm">Position</th>
									<th class="th-sm">Office</th>
									<th class="th-sm">Age</th>
									<th class="th-sm">Start date</th>
									<th class="th-sm">Salary</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script src="<?= base_url('mdb/js/mdb.min.js') ;?>"></script>
	</body>
	</html>