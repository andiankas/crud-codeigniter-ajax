<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar</title>
	
	<!-- bootstrap -->
	
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/DataTables/css/dataTables.bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	
	<div class="container">
		<center>
			<h1>Belajar Codeigniter with AJAX</h1>
			<h3>Book Store</h3>
		</center>

		<button type="button" class="btn btn-primary" onclick="addBook()"><i class="glyphicon glyphicon-plus"></i> Add Book</button>

		<br><br>

		<table id="table_id" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Book ID</th>
					<th>Book ISBN</th>
					<th>Book Title</th>
					<th>Book Author</th>
					<th>Book Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1001</td>
					<td>Aku Bukan Pujangga</td>
					<td>Reza Panggabean</td>
					<td>Fiksi</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>


	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/DataTables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/DataTables/js/dataTables.bootstrap.min.js"></script>
	<!-- js -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table_id').dataTable();
		});
	</script>
	<div id="modal_form" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body form">
	        <p>One fine body&hellip;</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</body>
</html>