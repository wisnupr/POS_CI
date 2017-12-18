<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myigniter_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function get($table)
	{
		$this->db->select("*");
		$this->db->from($table);

		return $this->db->get();
	}

	function getViewPembelian($tableViewPembelian)
	{
		$this->db->select("*");
		$this->db->from($tableViewPembelian);

		return $this->db->get();
	}

	function get1($table1)
	{
		$this->db->select("*");
		$this->db->from($table1);

		return $this->db->get();
	}

	function favorite($table)
	{
		$this->db->select("*");
		$this->db->from($table);

		return $this->db->get();
	}

	function views($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);

		return $this->db->get();
	}

	function getData($table, $condition)
	{
        $this->db->where($condition); 
        $this->db->select("*");
        $this->db->from($table);
        
        return $this->db->get();
	}

	function addData($table,$data)
	{
		$this->db->insert($table, $data);
	}

	function minData($table,$data)
	{
		$this->db->query("Update barang set stok=$min");
	}

	function updateData($table, $data, $condition)
	{
        $this->db->where($condition);
        $this->db->update($table, $data);
	}

	function updateData1($table, $data1, $condition)
	{
        $this->db->where($condition);
        $this->db->update($table, $data1);
	}

	function updateDataStok($tableUpStok, $dataUpStok, $condition)
	{
        $this->db->where($condition);
        $this->db->update($tableUpStok, $dataUpStok);
	}

	function deleteData($table, $condition)
	{
        $this->db->where($condition);
        $this->db->delete($table);
	}

	function setoran($table, $condition)
	{
		$this->db->group_by("tgl"); 
		$this->db->where($condition); 
        $this->db->select("*");
        $this->db->from($table);
        
        return $this->db->get();
	}

	function today($table)
	// function today()
	{
		// $datestring = '2014-10-20';
		// $this->db->query('SELECT * fROM penjualan WHERE tgl = "2014-10-20"');
		// $this->db->group_by("tgl"); 
		// $this->db->where($condition,'p.id_barang=b.id'); 
        // $this->db->select("*");
        $this->db->select("*");
        $this->db->from($table);
        
        return $this->db->get();
	}

	function totalSetor($table, $condition)
	{
		$this->db->select_sum('total_harga');
		$this->db->where($condition); 
        $this->db->from($table);

        return $this->db->get();
	}

	function buat_kode()   {    
		  $this->db->select('RIGHT(penjualan.id,2) as kode', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);     
		  $query = $this->db->get('penjualan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){       
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;     
		  }
		  else{       
		   //jika kode belum ada      
		   $kode = 1;     
		  }
		  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
		  $kodejadi = date('dmy').$kodemax;     
		  return $kodejadi;  
		 }
 	public function totalhrg()
		 {
		 	$this->db->query('SELECT SUM( total_harga ) AS total_harga FROM penjualan');
		 }
}

/* End of file myigniter_model.php */
/* Location: ./application/models/myigniter_model.php */