<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Quantity</th>
				<th>Harga Satuan</th>
				<th>Harga Total</th>
				<th>
			</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($this->cart->contents() as $items){ ?>
			<tr>
				<td><?= $items['id'] ?></td>	 
				<td><?= $items['name'] ?></td> 
				<td><?php

				 if ($items['qty']>$items['stok']) {
				 	echo"
				 	 <script>
	        	alert('Stok tidak mencukupi');
	        	</script>
				 	";
				 	echo $items['stok'];

				 }else{
				 	echo $items['qty'];
				 }

				 	?></td>
				<td><?= $items['price'] ?></td>
				<td><?= $total = $items['price']*$items['qty'] ?></td>
				<td><a onClick='delete_row("<?= $items['rowid'] ?>")'>Hapus</a></td>			
			</tr>
		<?php
		}
		?> 
	</tbody>
</table>
<script>
var site_url = '<?=site_url()?>';

function delete_row (id){
$.get(site_url+'/myigniter/deleterow/'+id, function(data) {
	/*optional stuff to do after success */
	kolom();
	total();
	});
}
</script>