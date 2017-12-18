<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Pembelian";
		$table = "vbarang";
		$tableViewPembelian = "vpembelian";
		$content = "pembelian/view_pembelian";
		$data['produk'] = $this->myigniter_model->get($table);
		$data['pembelian'] = $this->myigniter_model->get($tableViewPembelian);
		$data['judule'] = "Pembelian";
		$this->template->output($data, $content);
	}

	public function tambahBarang()
	{
		$data['title'] = "Tambah Barang";
		$table = "kategori";
		$data['kategori'] = $this->myigniter_model->get($table);
		$content = "barang/tambah_barang";
		$data['judule'] = "TAMBAH BARANG";
		$this->template->output($data, $content);
	}

	function inputSubmit()
	{
		$table = "pembelian";
		$tableUpStok = "barang";
		$condition['id'] = $this->input->post('id');
		$stokAwal = $this->input->post('stokawal'); 
		$stokBaru = $this->input->post('stok');
		$stokUpdate = $stokawal + $stokBaru;
		$data = array(
			'id_barang' => $this->input->post('id'), 
			'harga_beli' => $this->input->post('hargabeli'), 
			'harga_jual' => $this->input->post('hargajual'), 
			'stok' => $this->input->post('stok'),
			'tgl' => $this->input->post('tgl'), 
			'id_admin' => $this->input->post('id_admin'),
			);
		$this->myigniter_model->addData($table, $data);
		$dataUpStok = array( 
			'nama' => $this->input->post('nama'), 
			'harga_beli' => $this->input->post('hargabeli'), 
			'harga_jual' => $this->input->post('hargajual'), 
			'stok' => $stokUpdate
			);
		$this->myigniter_model->updateDataStok($tableUpStok, $dataUpStok, $condition);
		redirect('pembelian');
	}

	function inputPembelian($id)
	{
		$table="barang";
		$condition['id'] = $id;

		$data['update'] = $this->myigniter_model->getData($table, $condition);

		$data['title'] = "Pembelian";
		$content = "pembelian/input_pembelian";
		$data['judule'] = "Input Pembelian";
		$this->template->output($data, $content);
	}

	function updateSubmit()
	{
		$table = "barang";
		$condition['id'] = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'), 
			'harga_beli' => $this->input->post('hargabeli'), 
			'harga_jual' => $this->input->post('hargajual'), 
			'stok' => $this->input->post('stok') 
		);
		$this->myigniter_model->updateData($table, $data, $condition);
		redirect('pembelian');
	}

	function delete($table, $id)
	{
		$condition['id'] = $id;
		$this->myigniter_model->deleteData($table, $condition);
		redirect('pembelian');
	}
}
/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */