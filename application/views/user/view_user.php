<style>
    .dataTables_filter {
     display: none;
    }
    </style>
<section>
	<div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-6">
				<a class="btn btn-success btn-lg"style="border-bottom:none;" href="<?= site_url('user/tambahUser') ?>">
					<i class="fa fa-plus"></i> Tambah User</a>
				</div>
				<div class="col-md-6">
				<div class="input-group input-group-lg">
				  
				  <input id="searchbox" type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
					<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-search"></span></span>
				</div>
				</div>
				<div class="col-md-12">
				<div class="panel panel-primary" style="margin-top:10px;">
				<div class="panel-heading"><h2 style="margin:0; padding:0;">Tabel Data User</h2></div>
            	<div class="panel-body" style="padding:0;">
					<table class="table table-hover table-bordered table-striped" id="dataTables-example">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Role</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($user->result() as $row): ?>
								<tr>
									<td><?= $row->id ?></td>
									<td><?= $row->nm_user ?></td>
									<td><?= $row->username ?></td>
									<td><?= $row->status ?></td>
									<td>
									<div class="btn-group" role="group" aria-label="...">
										<a class="btn btn-warning" href="<?= site_url('user/updateUser/'.$row->id) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
										<a class="btn btn-danger" href="<?= site_url('user/delete/user/'.$row->id) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
									</div>
									</td>
								</tr>				
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- plugins -->
<script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
<script>
$(document).ready(function() {
    var dataTable = $('#dataTables-example').dataTable({
    dom :"Bfrtip",
	bInfo : false
});
$("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });
});
</script>