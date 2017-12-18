<div class="container">
<div class="row">

<div class="col-md-6">
	<div class="panel panel-default">
	  <div class="panel-heading">Stok Terjual</div>
	  <div class="panel-body">
	    <table class="table">
	    	<thead>
	    		<tr>
	    			<th>#</th>
	    			<th>Nama Produk</th>
	    			<th>Stok</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	<?php 
	    	$i=1;
	    	foreach ($stok->result() as $r):
	    	?>
	    		<tr>
	    			<td><?= $i++; ?></td>
	    			<td><?= $r->nama ?></td>
	    			<td><?= $r->stok ?></td>
	    		</tr>
	    	<?php endforeach?>
	    	</tbody>
	    </table>
	  </div>
	</div>
</div>
<div class="col-md-6"> 
	<div class="panel panel-default">
	  <div class="panel-heading">Produk Favorit</div>
	  <div class="panel-body">
	  	<table class="table">
	    	<thead>
	    		<tr>
	    			<th>#</th>
	    			<th>Nama Produk</th>
	    			<th>Stok</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	<?php 
	    	$i=1;
	    	foreach ($favorite->result() as $rf):
	    	?>
	    		<tr>
	    			<td><?= $i++; ?></td>
	    			<td><?= $rf->nama ?></td>
	    			<td><?= $rf->jml ?></td>
	    		</tr>
	    	<?php endforeach?>
	    	</tbody>
	    </table>
	  </div>
	</div>
</div>




<table class="table">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Quantity</td>
			<td>Total Harga</td>
			<td>Tanggal</td>
		</tr>
	</thead>
	<tbody>
	<?php 
	$tot = 0;
	$i =1;

	foreach ($transaksi->result() as $key):?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $key->nama ?></td>
			<td><?= $key->qty ?></td>
			
			<?php
			$sub=$key->total_harga;
			$tot = $tot + $sub;
			?>
			<td><?= number_format($key->total_harga,2) ?></td>
			<td><?= $key->tgl ?></td>
			
		</tr>
	<?php endforeach;?>
		<tr>
			<td></td>
			<td></td>
			<td>Total</td>
			<td>
				<?php 
				// $total+=$total;
				echo number_format($tot,2);

				?>

			</td>
			<td></td>			
		</tr>
	</tbody>

</table>
</div>
</div>