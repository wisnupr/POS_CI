<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:60px">	

				<div class="panel panel-default">
					  <div class="panel-heading">Input Pembelian</div>
					  <div class="panel-body">				  

						<form action="<?= site_url('pembelian/inputSubmit') ?>" method="POST" role="form">
							
							<?php foreach ($update->result() as $val): ?>
								

							<table width="100%" border="0">
								<tr>
									<td><label>Barcode</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" value="<?= $val->id ?>" name="id" placeholder="Input Id" disabled="disabled">
											<input type="text" value="<?= $val->id ?>" name="id"  hidden="hidden">
										</div>
									</td>
								</tr>

								<tr>
									<td><label>Nama</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" value="<?= $val->nama ?>" name="nama" placeholder="Input Nama">
										</div>
									</td>
								</tr>

								<tr>
									<td><label>Harga Beli</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" value="<?= $val->harga_beli ?>" name="hargabeli" placeholder="Input Harga Beli">
										</div>
									</td>
								</tr>

								<tr>
									<td><label>Harga Jual</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" value="<?= $val->harga_jual ?>" name="hargajual" placeholder="Input Harga Jual">
										</div>
									</td>
								</tr>

								<tr>
									<td><label>STOK</label></td>
									<td>
										<div class="form-group">
											<input type="text" value="<?= $val->stok ?>" name="stokawal"  hidden="hidden">
											<input type="text" class="form-control" value="" name="stok" placeholder="Input Stok">
										</div>
									</td>
								</tr>
								<input type="text" value="<?= date('Y-m-d');?>" name="tgl"  hidden="hidden">

								<tr>
									<td><label></label></td>
									<td>
										<div class="form-group">
											<a class="btn btn-default" href="<?= site_url('pembelian') ?>">Kembali</a>
											<button type="submit" class="btn btn-primary">SAVE</button>
										</div>
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
</section>
