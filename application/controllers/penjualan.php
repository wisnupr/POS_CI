<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Penjualan";
		$table = "vpenjualan";
		$content = "penjualan/view_penjualan";
		$data['penjualan'] = $this->myigniter_model->get($table);
		$data['judule'] = "PENJUALAN";
		$this->template->output($data, $content);
	}

	// public function tambahBarang()
	// {
	// 	$data['title'] = "Tambah Barang";
	// 	$content = "barang/tambah_barang";
	// 	$data['judule'] = "TAMBAH BARANG";
	// 	$this->template->output($data, $content);
	// }

	// function tambahSubmit()
	// {
	// 	$table = "barang";
	// 	$data = array(
	// 		'id' => $this->input->post('id'), 
	// 		'nama' => $this->input->post('nama'), 
	// 		'harga_beli' => $this->input->post('hargabeli'), 
	// 		'harga_jual' => $this->input->post('hargajual'), 
	// 		'stok' => $this->input->post('stok') 
	// 		);
	// 	$this->myigniter_model->addData($table, $data);
	// 	redirect('inventory/tambahBarang','refresh');
	// }

	function updatePenjualan($id)
	{
		$table="barang";
		$condition['id'] = $id;

		$data['update'] = $this->myigniter_model->getData($table, $condition);

		$data['title'] = "Update Barang";
		$content = "barang/update_barang";
		$data['judule'] = "EDIT BARANG";
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
		redirect('penjualan');
	}

	function delete($table, $id)
	{
		$condition['id'] = $id;
		$this->myigniter_model->deleteData($table, $condition);
		redirect('penjualan');
	}
}
/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */