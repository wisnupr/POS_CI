<!-- <nav class="navbar navbar-fixed-top" style="margin-top:55px; z-index:-999"> -->
<section>
  <div class="container" style="margin-top:55px; z-index:-999">
  	<div class="row">
  	<div class="col-md-8" >
  	<div class="col-md-6" style="padding-left:0; margin-top:10px;">
	      <div class="input-group">
	        <span class="input-group-addon" id="basic-addon2">No Transaksi</span>
	        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="notransaksi" value="<?= $kodeunik; ?>">
	      </div>
	  </div>
	  <div class="col-md-6" style="padding-right:0; margin-top:10px;">
	      <div class="input-group">
	        <span class="input-group-addon" id="basic-addon2">Tanggal</span>
	        <input type="text" class="form-control" placeholder="<?php echo date('d-m-Y');?>" aria-describedby="basic-addon2" type="hidden">
	      </div>
	  </div>

    <div class="bs-example bs-example-tabs">
    <!-- a -->
    <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; padding-left:0; padding-right:0;">
	    <div class="input-group input-group-lg" style="margin-left:0;padding-left:0">    
	      <ul id="myTab" class="input-group-btn" style="padding-left:0;">
	        <li class="btn btn-default"><a href="#home" role="tab" data-toggle="tab"><i class="fa fa-gear"></i> Auto</a></li>
	        <li class="btn btn-default"><a href="#profile" style="padding:auto;" role="tab" data-toggle="tab"><i class="fa fa-gear"></i> Manual</a></li>
	      </ul>       
	      <!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1"> -->
	      <!-- <div> -->
	    	<div id="myTabContent" class="tab-content">
	        <div class="tab-pane fade active in " id="home">
		      	<form id="form" action="" method="POST" role="form">
					<div class="input-group input-group-lg" style="width:100%;">
						<input id="kode" type="text" name="kode" autocomplete="off" autofocus="autofocus" class="form-control" aria-describedby="sizing-addon1" placeholder="Kode" required="required">
					</div>
					<div align="right">		
					</div>
				</form>
		    </div>
		    <div class="tab-pane fade " id="profile">
		    	<form action="" method="POST" role="form">

		    	<div class="input-group input-group-lg" style="width:100%">
		    		<input id="manual" type="text" name="kode" autocomplete="off" autofocus="autofocus" style="border-radius:0;" class="form-control" aria-describedby="sizing-addon1" placeholder="Kode" required="required">
				      <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
				      <span class="input-group-btn">
				        <button class="btn btn-default tab" id="tombol" type="button">ADD</button>
				      </span>
				</div><!-- /input-group -->

		    		<!-- <div class="input-group input-group-lg"> -->
						<!-- <input id="manual" type="text" name="kode" autocomplete="off" autofocus="autofocus" class="form-control" placeholder="Kode" required="required"> -->
				      <!-- <span class="input-group-addon"> -->
				      <!-- <span class="input-group-addon" id="sizing-addon1"><i class="icon-search"></i></span> -->
						<!-- <button type="button" class="tabs" id="tombol" > Add</button> -->
				      <!-- </span> -->
				    <!-- </div> -->
				</form>
	        </div>
	    </div>
	    <!-- </div> -->
	    
	    </div>
	  </div>
    <!-- /a -->
		<!-- <div>
		    <ul id="myTab" class="nav nav-tabs" role="tablist">
		      <li class="active"></li>
		      <li class=""></li>
		    </ul>
	    </div> -->
<!-- 	    <div id="myTabContent" class="tab-content">
	        <div class="tab-pane fade active in " id="home">
		      	<form id="form" action="" method="POST" role="form">
					<div class="input-group">
						<input id="kode" type="text" name="kode" autocomplete="off" autofocus="autofocus" class="form-control" placeholder="Kode" required="required">
					</div>
					<div align="right">		
					</div>
				</form>
		    </div>
		    <div class="tab-pane fade " id="profile">
		    	<form action="" method="POST" role="form">
		    		<div class="input-group">
						<input id="manual" type="text" name="kode" autocomplete="off" autofocus="autofocus" class="form-control" placeholder="Kode" required="required">
				      <span class="input-group-btn">
						<button type="button" class="btn btn-default tabs" id="tombol" > Add</button>
				      </span>
				    </div>
				</form>
	        </div>
	    </div> -->
	</div>
	<section>
		<!-- <div class="container" > -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive keranjang">
				</div>
			</div>
			
		<!-- </div> -->
		</div>
	</section>
	</div><!-- 
	<div class="col-md-4">
	</div> -->
	<!-- <div class="col-md-4">
        <a data-toggle="modal" href='#modal-id' class="kusus">
		<div class="kotak-harga">
			<div class="garis">
			  <span>BAYAR</span>
			  <h3 id="total" ></h3>
			</div>
		</div>
		</a>
		</div> -->
	<!-- col4 -->
	<div class="col-md-4">
          <div class="col-md-12 btn-primary" >
          <b align="center" style="font-size:24px;">Total</b>
          <div id="total" style="margin:auto; padding:5px; font-size:36px; font-weight:bold;" align="right">
            
          </div>
          </div>
          <div class="col-md-12">
          <!-- <b align="center" style="font-size:24px; color:black">Uang</b> -->
          <div style="margin:auto; padding:5px; padding-left:0; padding-right:0; font-size:36px; font-weight:bold;" align="right">
            <div class="row">
         	<div class="input-group input-group-lg">
            	
            	<input type="text" id="bayare" class="form-control" placeholder="Uang" aria-describedby="basic-addon2" type="hidden">
          		<span class="input-group-btn">
				    <button id="kembalian" class="btn btn-warning" type="button"><i class="icon-money icon-x2"></i> HITUNG</button>
				</span>

          	</div>
          	</div>

          </div>
          </div>

          <div class="col-md-12 btn-info">
          <b align="center" style="font-size:24px;">Kembalian</b>
          <div style="margin:auto; padding:5px; font-size:36px; font-weight:bold;" align="right">
            <div id="ganti">
            	Rp. 0
            </div>
          </div>
          </div>
          
          <div class="row">
          <div class="col-md-12" style="padding:0; margin-top:10px;">

          	
				<div class="col-md-6" align="center">
	              <a class="btn btn-large btn-success" href="<?= site_url("myigniter/selesai")?>" style="width:150px">
	              <i class="icon-ok icon-4x pull-center"></i>
	                <span class="span1">CHECK OUT</span>
	              </a>  
	            </div>
	            <div class="col-md-6" align="center">
	            <button onclick="hapusSemua()" class="btn btn-large btn-danger" href="#" style="width:150px">
	            <i class="icon-remove icon-4x pull-center"></i>
	              <span class="span1">CANCEL</span>
	            </button>
	            </div>
		
		</div>
		</div>
    </div>
	<!-- /col4 -->
	</div><!-- row -->
  </div><!-- container -->
<!-- </nav> -->
</section>
<!-- List Barang -->


<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.price_format.2.0.min.js') ?>"></script>
<script>
$(function() {
	var availableTags = [
	  <?php foreach ($cari->result() as $row): ?>
	  	"<?= $row->id ?>",
	  <?php endforeach ?>
	];
	$( "#manual" ).autocomplete({
	  source: availableTags
	});

	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).click('show');
	})

	$('#kode').keyup(function() {
	    konfirmasi();
	});

	$('#tombol').click(function() {
		$(this).addClass('disabled');
		konfirmasi();
	});

	kolom();
	total();

	var rupiah ={prefix: 'Rp. ', thousandsSeparator: '.', centsLimit: 0};
	$('#bayare').priceFormat(rupiah);
	$('#ganti');

	$('#kembalian').click(function() {
		site_url = '<?=site_url()?>';
		$.get(site_url+'/myigniter/total', function(data) {
			tot = data;
			bayare = $('#bayare').unmask();
			kembali = bayare - tot;
			$('#ganti').html('<b class="totalan">'+kembali+'</b>');
			$('.totalan').priceFormat({prefix: 'Rp. ', thousandsSeparator: '.', centsLimit: 0});
	    });
	});

	$('.tutup').click(function() {
		/* Act on the event */

	});
});


function kolom()
{
  site_url = '<?=site_url()?>';
  $.get(site_url+'/myigniter/daftarkeranjang', function(data) {
    $(".keranjang").html(data);
  });
}

function total()
{
  site_url = '<?=site_url()?>';
  $.get(site_url+'/myigniter/total', function(data) {
    $("#total, .totalan").html(data).priceFormat({
		prefix: 'Rp. ',
	    thousandsSeparator: '.',
	    centsLimit: 0
    });
  });
}

function konfirmasi()
{
    setTimeout(function(){
   	  site_url = '<?=site_url()?>';
   	  var cek = $("#kode").val();

      if (cek == '') {
	      var id = $("#manual").val();
      }else{
	      var id = $("#kode").val();
      }

      $.get(site_url+'/myigniter/keranjang/'+id, function() {
        /*optional stuff to do after success */
        $("#kode").val('');
        $("#manual").val('');
        kolom();
        total();
      }).done(function() {
		$("#tombol").removeClass('disabled');
	  });
      //$('#form').submit();
    }, 700);
}

function hapusSemua()
{
	site_url = '<?=site_url()?>';
	$.get(site_url+'/myigniter/delete', function() {
		/*optional stuff to do after success */
		kolom();
        total();	
	});
}
</script>