<style>
    .dataTables_filter {
     display: none;
    }
    </style>
<!--     <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h2 style="margin:0; padding:0;">A</h2>
    				</div>
    				<div class="panel-body">
    					a
    				</div>
    			</div>
    		</div>

    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h2 style="margin:0; padding:0;">A</h2>
    				</div>
    				<div class="panel-body">
    					a
    				</div>
    			</div>
    		</div>

    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h2 style="margin:0; padding:0;">A</h2>
    				</div>
    				<div class="panel-body">
    					a
    				</div>
    			</div>
    		</div>
    		
    	</div>
    </div> -->
<section>
	<div class="container" style="margin-top:60px;">
		<div class="row">
    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h3 style="margin:0; padding:0;">Total Penjualan</h3>
    				</div>
    				<div class="panel-body">
    					<div class="row">
    					<div class="col-md-9" align="left">
    					<h2 style="margin:0; padding:0; font-weight:bold;">Rp. 
						<?php 
						$Q=$this->db->query('SELECT SUM( total_harga ) AS total_harga FROM penjualan');
						foreach ($Q->result() as $roww)
						{
						        echo $roww->total_harga;
						}
    					?>  
    					</h2>  						
    					</div>
    					<div class="col-md-3" align="right">
    						<i style="margin:0; padding:0; color:#EEAABB;"class="fa fa-bar-chart fa-3x" aria-hidden="true"></i>
    					</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h3 style="margin:0; padding:0;">Total Pembelian</h3>
    				</div>
    				<div class="panel-body">
    					<div class="row">
    					<div class="col-md-9" align="left">
    					<h2 style="margin:0; padding:0; font-weight:bold;">Rp. 
						<?php 
						$Qp=$this->db->query('SELECT SUM( harga_beli * stok ) AS jml_beli FROM pembelian');
						foreach ($Qp->result() as $roww)
						{
						        echo $roww->jml_beli;
						}
    					?>    
    					</h2>  						
    					</div>
    					<div class="col-md-3" align="right">
    						<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
    						<i style="margin:0; padding:0; color:#EEAABB;"class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
    					</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="col-md-4">
    			<div class="panel panel-primary">
    				<div class="panel-heading">
    					<h3 style="margin:0; padding:0;">Total Produk Terjual</h3>
    				</div>
    				<div class="panel-body">
    					<div class="row">
    					<div class="col-md-9" align="left">
    					<h2 style="margin:0; padding:0; font-weight:bold;">
						<?php 
						$Qtp=$this->db->query('SELECT SUM( qty ) AS qty FROM penjualan');
						foreach ($Qtp->result() as $roww)
						{
						        echo $roww->qty;
						}
    					?>     
    					</h2>  						
    					</div>
    					<div class="col-md-3" align="right">
    						<i style="margin:0; padding:0; color:#EEAABB;"class="fa fa-signal fa-3x" aria-hidden="true"></i>
    					</div>
    					</div>
    				</div>
    			</div>
    		</div>    		
    	</div>
		<div class="row">
				<div class="col-md-4">
				<div class="panel panel-primary" style="margin-top:10px;">
				<div class="panel-heading"><h3 style="margin:0; padding:0;">Top 10 Penjualan</h3></div>
            	<div class="panel-body" style="padding:0;">
					<table class="table table-hover table-bordered table-striped" id="dataTables-example">
						<thead>
							<tr>
								<th>Produk</th>
								<th>Qty</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($report->result() as $row): ?>
								<tr>
									<td><?= $row->nama ?></td>
									<td><?= $row->qty ?></td>
								</tr>				
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				</div>
				</div>
				<div class="col-md-8">
				<div class="panel panel-primary" style="margin-top:10px;">
				<div class="panel-heading"><h3 style="margin:0; padding:0;">Chart</h3></div>
            	<div class="panel-body" style="padding:0;">
            	as
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
	"paging":   false,
    "ordering": false,
    "info":     false
});
$("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });
});
</script>