	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:60px">		
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2 style="margin:0; padding:0;">EDIT USER</h2></div>
				  	<div class="panel-body">
						<form action="<?= site_url('user/updateSubmit') ?>" method="POST" role="form">
							<?php foreach ($update->result() as $val): ?>
							<table width="100%" style="border:none;">
								<tr>
									<td><label>ID</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" value="<?= $val->id ?>" name="id" placeholder="Input Id" disabled="disabled">
											<input type="text" value="<?= $val->id ?>" name="id"  hidden="hidden">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Username</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username" value="<?= $val->username ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Password</label></td>
									<td>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password" value="<?= $val->password ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Nama</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="nm_user" placeholder="Nama User" value="<?= $val->nm_user ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td><label>Role</label></td>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" name="role" placeholder="Role" value="<?= $val->role ?>">
										</div>
									</td>
								</tr>
								<!-- <tr>
									<td><label>Status</label></td>
									<td>
										<div class="form-group">
											<div class="radio">
											  <label>
											    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											    Option one is this and that&mdash;be sure to include why it's great
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											    Option two can be something else and selecting it will deselect option one
											  </label>
											</div>
										</div>
								</tr> -->
								<tr>
									<td></td>
									<td>
										<a class="btn btn-warning btn-lg" href="<?= site_url('user') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
										<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
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

