<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:60px">		
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2 style="margin:0; padding:0;">TAMBAH BARANG</h2></div>
				  	<div class="panel-body">
						<form action="<?= site_url('inventory/tambahSubmit') ?>" method="POST" role="form">

							<table width="100%" style="border:none;">
								<tr>
									<td><label for="">Pilih Kategori</label></td>
									<td>
										<div class="form-group">
											
											<select class="form-control" name="id_kategori">
											  <option>Kategori</option>
											  <?php foreach ($kategori->result() as $row): ?>
													<option value="<?= $row->id_kategori ?>"><?= $row->nm_kategori ?></option>				
												<?php endforeach ?>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td><label>ID</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="id" placeholder="Input Id">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Nama Produk</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="nama" placeholder="Input Nama"></td>
										</div>
								</tr>
								<tr>
									<td><label>Harga Beli</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="hargabeli" placeholder="Input Harga Beli"></td>
										</div>
								</tr>
								<tr>
									<td><label>Harga Jual</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="hargajual" placeholder="Input Harga Jual"></td>
										</div>
								</tr>
								<tr>
									<td><label>Stok</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="stok" placeholder="Input Stok"></td>
										</div>
								</tr>
								<tr>
									<td></td>
									<td>
										<a class="btn btn-warning btn-lg" href="<?= site_url('inventory') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
										<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
									</td>
								</tr>
							</table>							
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
