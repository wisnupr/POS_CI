<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "User";
		$table = "vreport_pj";
		$content = "report/view_report";
		$data['report'] = $this->myigniter_model->get($table);
		$data['judule'] = "Report";
		$this->template->output($data, $content);
	}

	// public function tambahUser()
	// {
	// 	$data['title'] = "Tambah User";
	// 	$table = "user";
	// 	$data['user'] = $this->myigniter_model->get($table);
	// 	$content = "user/tambah_user";
	// 	$data['judule'] = "TAMBAH USER";
	// 	$this->template->output($data, $content);
	// }

	// function tambahSubmit()
	// {
	// 	$table = "user";
	// 	$data = array(
	// 		'id' => $this->input->post('id'),
	// 		'username' => $this->input->post('username'),
	// 		'password' => $this->input->post('password'),
	// 		'nm_user' => $this->input->post('nm_user'),
	// 		'role' => $this->input->post('role'),
	// 		'status' => $this->input->post('status')
	// 		);
	// 	$this->myigniter_model->addData($table, $data);
	// 	redirect('user/tambahUser','refresh');
	// }

	// function updateUser($id)
	// {
	// 	$table="user";
	// 	$condition['id'] = $id;

	// 	$data['update'] = $this->myigniter_model->getData($table, $condition);

	// 	$data['title'] = "Update User";
	// 	$content = "user/update_user";
	// 	$data['judule'] = "EDIT USER";
	// 	$this->template->output($data, $content);
	// }

	// function updateSubmit()
	// {
	// 	$table = "user";
	// 	$condition['id'] = $this->input->post('id');
	// 	$data = array(
	// 		'username' => $this->input->post('username'),
	// 		'password' => $this->input->post('password'),
	// 		'nm_user' => $this->input->post('nm_user'),
	// 		'role' => $this->input->post('role')
	// 		// 'status' => $this->input->post('status')
	// 	);
	// 	$this->myigniter_model->updateData($table, $data, $condition);
	// 	redirect('user');
	// }

	// function delete($table, $id)
	// {
	// 	$condition['id'] = $id;
	// 	$this->myigniter_model->deleteData($table, $condition);
	// 	redirect('user');
	// }
}
/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */