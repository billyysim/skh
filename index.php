<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h1> Dashboard </h1>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Add SKH</div>
		<table class="table table-striped table-hover">
			<tr>
				<td>Tahun Ajaran</td>
				<td>Tingkat</td>
				<td>Tanggal</td>
				<td>Tema</td>
				<td>Mata Pelajaran</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>2015-2016</td>
				<td>KD1</td>
				<td>09-05-2016 s/d 13-05-2016</td>
				<td>Alat Komunikasi</td>
				<td>Bahasa Indonesia</td>
				<td><a href="addSKH.php" class="btn btn-warning">ADD</a></td>
			</tr>
		</table>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Draft SKH</div>
		<table class="table table-striped table-hover">
			<tr>
				<td>Tahun Ajaran</td>
				<td>Tingkat</td>
				<td>Tanggal</td>
				<td>Tema</td>
				<td>Mata Pelajaran</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>2015-2016</td>
				<td>KD1</td>
				<td>09-05-2016 s/d 13-05-2016</td>
				<td>Alat Komunikasi</td>
				<td>Bahasa Indonesia</td>
				<td><button type="button" class="btn btn-primary">Edit</button></td>
			</tr>
		</table>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Correction</div>
		<table class="table table-striped table-hover">
			<tr>
				<td>Tahun Ajaran</td>
				<td>Tingkat</td>
				<td>Tanggal</td>
				<td>Tema</td>
				<td>Mata Pelajaran</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>2015-2016</td>
				<td>KD1</td>
				<td>09-05-2016 s/d 13-05-2016</td>
				<td>Alat Komunikasi</td>
				<td>Bahasa Indonesia</td>
				<td><button type="button" class="btn btn-danger">Edit</button></td>
			</tr>
		</table>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Waiting For Apporoval</div>
		<table class="table table-striped table-hover">
			<tr>
				<td>Tahun Ajaran</td>
				<td>Tingkat</td>
				<td>Tanggal</td>
				<td>Tema</td>
				<td>Mata Pelajaran</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>2015-2016</td>
				<td>KD1</td>
				<td>09-05-2016 s/d 13-05-2016</td>
				<td>Alat Komunikasi</td>
				<td>Bahasa Indonesia</td>
				<td><button type="button" class="btn btn-info">Detail</button></td>
			</tr>
		</table>
	</div>
</div>
<?php include 'footer.php' ?>