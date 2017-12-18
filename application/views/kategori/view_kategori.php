<style>
    .dataTables_filter {
     display: none;
    }
    </style>
<section>
	<div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Kategori</div>
					<div class="panel-body" >
						<form action="<?= site_url('kategori/tambahSubmit') ?>" method="POST" role="form">
							<!-- <div class="form-group" >
								<input type="text" class="form-control" name="nama" placeholder="Input Nama">
								<span class="input-group-btn">
						        <button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
						        </span>
							</div> -->
							<div class="input-group">
						      <input type="text" name="nama" class="form-control" placeholder="Input Nama Kategori">
						      <span class="input-group-btn">
						        <button class="btn btn-success" type="submit"><i class='fa fa-plus'></i></button>>
						      </span>
						    </div>				
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" >
				<div class="panel panel-primary">
					<div class="panel-heading">
					<div class="row">
						<div class="col-lg-4" >
						<h2 style="margin:0; padding:0;">Kategori</h2>
						</div>
						<div class="col-lg-4" >
						</div>
						<div class="col-lg-4" >
						<div class="input-group">
						  <input type="text" id="searchbox" class="form-control" placeholder="Search">
						  <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
						</div>
						</div>
						<!-- <div align="right" class="input-group col-md-4">
						  <input type="text" id="searchbox" class="form-control" placeholder="Search">
						  <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
						</div> --> 
					</div>
					</div>
					  
					<div class="panel-body" style="padding:0;">
						<div class="table-responsive">
						
							<table class="table table-hover table-bordered table-striped" id="dataTables-example">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama Kategori</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kategori->result() as $row): ?>
										<tr>
											<td><?= $row->id_kategori ?></td>
											<td><?= $row->nm_kategori ?></td>
											<td>
												<div class="btn-group" role="group" aria-label="...">
												  <a class="btn btn-warning" href="<?= site_url('kategori/updateKategori/'.$row->id_kategori) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												  <a class="btn btn-danger" href="<?= site_url('kategori/delete/kategori/'.$row->id_kategori) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
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

