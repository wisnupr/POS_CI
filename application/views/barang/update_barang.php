<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:60px">		
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2 style="margin:0; padding:0;">EDIT BARANG</h2></div>
				  	<div class="panel-body">		
				<form action="<?= site_url('inventory/updateSubmit') ?>" method="POST" role="form">
					<?php foreach ($update->result() as $val): ?>
					<table width="100%" style="border:none;">
					<tr>
						<td><label for="">Id</label></td>
						<td>
							<div class="form-group">
						
								<input type="text" class="form-control" value="<?= $val->id ?>" name="id" placeholder="Input Id" disabled="disabled">
								<input type="text" value="<?= $val->id ?>" name="id"  hidden="hidden">
							</div>
						</td>
					</tr>
					<tr>
						<td><label for="">Nama</label></td>
						<td>
							<div class="form-group">
						
								<input type="text" class="form-control" value="<?= $val->nama ?>" name="nama" placeholder="Input Nama">
							</div>		
						</td>
					</tr>
					<tr>
						<td><label for="">Harga Beli</label></td>
						<td>
							<div class="form-group">
						
								<input type="text" class="form-control" value="<?= $val->harga_beli ?>" name="hargabeli" placeholder="Input Harga Beli">
							</div>
						</td>
					</tr>
					<tr>
						<td><label for="">Harga Jual</label></td>
						<td>
							<div class="form-group">
						
								<input type="text" class="form-control" value="<?= $val->harga_jual ?>" name="hargajual" placeholder="Input Harga Jual">
							</div>
						</td>
					</tr>
					<tr>
						<td><label for="">Stok</label></td>
						<td>
							<div class="form-group">
						
								<input type="text" class="form-control" value="<?= $val->stok ?>" name="stok" placeholder="Input Stok">
							</div>	
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="btn btn-warning btn-lg" href="<?= site_url('inventory') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
							<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
						</td>
					</tr>
					
					</table>
				<?php endforeach ?>

				</form>
			</div>
		</div>
	</div>
	</div>
</div>
