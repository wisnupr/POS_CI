
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:60px">		
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2 style="margin:0; padding:0;">TAMBAH USER</h2></div>
				  	<div class="panel-body">
						<form action="<?= site_url('user/tambahSubmit') ?>" method="POST" role="form">

							<table width="100%" style="border:none;">
								<tr>
									<td><label>ID</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="id" placeholder="Input Id">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Username</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Password</label></td>
									<td>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Nama</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="nm_user" placeholder="Nama User">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Role</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="role" placeholder="Role">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Status</label></td>
									<td>
										<div class="form-group">
											<select class="form-control" name="status">
												<option value="00">Pilih Status</option>
												<option value="1">Aktive</option>
												<option value="0">Non-Aktive</option>
											</select>
										</div>
								</tr>
								<tr>
									<td></td>
									<td><a class="btn btn-warning btn-lg" href="<?= site_url('user') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
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
