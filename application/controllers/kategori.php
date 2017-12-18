<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Kategori";
		$table = "kategori";
		$data['kategori'] = $this->myigniter_model->get($table);
		$content = "kategori/view_kategori";
		$this->template->output($data, $content);
	}

	public function tambahBarang()
	{
		$data['title'] = "Kategori";
		$table = "kategori";
		$data['kategori'] = $this->myigniter_model->get($table);
		$content = "kategori/tambah_kategori";
		$this->template->output($data, $content);
	}

	function tambahSubmit()
	{
		$table = "kategori";
		$data = array( 
			'nm_kategori' => $this->input->post('nama') 
			);
		$this->myigniter_model->addData($table, $data);
		redirect('kategori','refresh');
	}

	function updateKategori($id)
	{
		$table="kategori";
		$condition['id_kategori'] = $id;

		$data['update'] = $this->myigniter_model->getData($table, $condition);

		$data['title'] = "Update Data Kategori";
		$content = "Kategori/update_kategori";
		$data['judule'] = "EDIT Kategori";
		$this->template->output($data, $content);
	}

	function updateSubmit()
	{
		$table = "kategori";
		$condition['id_kategori'] = $this->input->post('id');
		$data = array(
			'nm_kategori' => $this->input->post('nama')
		);
		$this->myigniter_model->updateData($table, $data, $condition);
		redirect('kategori');
	}

	function delete($table, $id)
	{
		$condition['id_kategori'] = $id;
		$this->myigniter_model->deleteData($table, $condition);
		redirect('kategori');
	}
}
/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */