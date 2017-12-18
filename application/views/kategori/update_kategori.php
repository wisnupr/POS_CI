	<div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">			
				<div class="panel panel-primary">
				  <div class="panel-heading"><h2 style="margin:0; padding:0;">UPDATE KATEGORI</h2></div>
				  <div class="panel-body">
						<form action="<?= site_url('kategori/updateSubmit') ?>" method="POST" role="form">
							
							<?php foreach ($update->result() as $val): ?>
								
							<div class="form-group">
								<label for="">Id</label>
								<input type="text" class="form-control" value="<?= $val->id_kategori ?>" name="id" placeholder="Input Id" disabled="disabled">
								<input type="text" value="<?= $val->id_kategori ?>" name="id"  hidden="hidden">
							</div>
							<div class="form-group">
								<label for="">Nama Kategori</label>
								<input type="text" class="form-control" value="<?= $val->nm_kategori ?>" name="nama" placeholder="Input Nama">
							</div>		
							<a class="btn btn-warning btn-lg" href="<?= site_url('kategori') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
							<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
						<?php endforeach ?>
						</form>
				  </div>
				</div>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

