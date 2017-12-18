<style>
    .dataTables_filter {
     display: none;
    }
    </style>
<section>
	<div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-lg-12" style="padding:0;">
				<div class="col-md-4">
					<div class="panel panel-primary" style="margin-top:10px;">
						<div class="panel-heading"><h2 style="margin:0; padding:0;">Search Produk</h2></div>
			            <div class="panel-body" style="padding:0;">
			            <div class="input-group" style="margin:5px;">
							<input id="searchbox" type="text" autofocus="autofocus" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
							<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-search"></span></span>
						</div>
							<table class="table table-hover table-bordered table-striped" id="dataTables-example">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama</th>
										<th>#</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($produk->result() as $row): ?>
										<tr>
											<td><?= $row->id ?></td>
											<td><?= $row->nama ?></td>
											<td>
												<a href="<?= site_url('pembelian/inputPembelian/'.$row->id) ?>" class="btn btn-info">pilih</a>
											</td>
										</tr>				
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="panel panel-primary" style="margin-top:10px;">
						<div class="panel-heading"><h2 style="margin:0; padding:0;">Tabel Pembelian</h2></div>
			            <div class="panel-body" style="padding:0;">
			            <div class="input-group" style="margin:5px;">
							<input id="searchpembelian" type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
							<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-search"></span></span>
						</div>
							<table class="table table-hover table-bordered table-striped" id="tblpembelian">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama</th>
										<th>Harga Beli</th>
										<th>Harga Jual</th>
										<th>QTY Stok</th>
										<th>Tanggal Input</th>
										<th>Admin</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pembelian->result() as $row): ?>
										<tr>
											<td><?= $row->id ?></td>
											<td><?= $row->nama ?></td>
											<td><?= $row->harga_beli ?></td>
											<td><?= $row->harga_jual ?></td>
											<td><?= $row->stok ?></td>
											<td><?= $row->tgl ?></td>
											<td><?= $row->id_admin ?></td>
											<td>
											<div class="btn-group" role="group" aria-label="...">
												<a class="btn btn-warning" href="<?= site_url('pembelian/inputPembelian/'.$row->id) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												<a class="btn btn-danger" href="<?= site_url('pembelian/delete/barang/'.$row->id) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
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

<div class="example">
	
</div>

<!-- plugins -->
<script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
<script>
$(document).ready(function() {
    var dataTable = $('#dataTables-example').dataTable({
    dom :"Bfrtip",
	bInfo : false,
	"scrollY":"200px",
    "scrollCollapse": true,
    "paging":false,
    ordering:false
	// LengthChange:false
	// pageLength:0
	// bPaginate: 5
    // bLengthChange: false,
    // bFilter: true,
    // bAutoWidth: false,
    // bPaginate: false

});
    


$("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
        // dataTable.fnFilter( this.value , 2 );

        // if ($(this).find('tbody tr').length<=1) {
         // $(this).parent().hide();
      // }
      // $(this).off("dataTables-example");

    });
var dataPembelian = $('#tblpembelian').dataTable({
	dom :"Bfrtip",
	bInfo : false
});

$("#searchpembelian").keyup(function() {
        dataPembelian.fnFilter(this.value);
    });

});
</script>