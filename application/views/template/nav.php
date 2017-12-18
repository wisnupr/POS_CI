<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom:5px solid #AEAEAE;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CV. Maju Jaya</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav" align="center">
        <li align="center"><a href="<?= site_url('myigniter') ?>"><i class="icon-ticket icon-2x"></i>
        <span>KASIR</span></a></li>
        <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MASTER DATA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= site_url('inventory') ?>">DATA BARANG</a></li>
            <li><a href="<?= site_url('kategori') ?>">DATA KATEGORI</a></li>
            <li><a href="<?= site_url('user') ?>">DATA USER</a></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSAKSI  <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= site_url('penjualan') ?>">TRANSAKSI PENJUALAN</a></li>
                <!-- <li><a href="site_url('myigniter/penjualan') ">TRANSAKSI PENJUALAN</a></li> -->
                <li><a href="<?= site_url('pembelian') ?>">TRANSAKSI PEMBELIAN</a></li>
              </ul>
            </li>
        </ul>
        <li align="center"><a href="<?= site_url('myigniter/penjualan') ?>"><i class="icon-ticket icon-2x"></i>
        <span>STATISTIK</span></a></li>
        <li><a href="<?= site_url('report') ?>"><i class="icon-list-alt icon-2x"></i>
        <span>REPORT</span></a></li>
        
      </ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./">User<span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
