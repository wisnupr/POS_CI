<div class="container" style="margin-top:60px;">
    <div class="row">      
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-primary" style="margin-top:10px;">
            <div class="panel-heading"><h2 style="margin:0; padding:0;">STATISTIK</h2></div>
                <div class="panel-body" style="padding:0;">
                  	<div id="myfirstchart" style="height: 250px;"></div>
                </div>
          </div>
        </div>
  	</div>
</div>
<script src="<?php echo base_url('assets/js/plugins/morris/raphael.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js') ?>"></script>
<script>
//Morris
new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    <?php foreach ($penjualan->result() as $row): ?>
    {
      tgl: '<?= $row->id ?>',
      value: '<?= $row->total_harga ?>'
    },
    <?php endforeach ?>
/*   { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 } */
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'tgl',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Total Jual'],
});
</script>
