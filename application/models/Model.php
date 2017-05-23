<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function getData($kategori) // getData($kategori)
	{  
		$query = $this->db->get($kategori); // get($kategori)
		return $query->result_array();  
	}

 	public function set_barang($data){ 
    	return $this->db->insert('kosmetik', $data);  
    }  
  	public function update_kosmetik($kodebarang, $data){ 
	    $this->db->where('kodebarang', $kodebarang); 
	    return $this->db->update('kosmetik', $data);  
	}

	public function update_skin($kodebarang, $data){ 
	    $this->db->where('kodebarang', $kodebarang); 
	    return $this->db->update('skin', $data);  
	}

	public function update_hair($kodebarang, $data){ 
	    $this->db->where('kodebarang', $kodebarang); 
	    return $this->db->update('hair', $data);  
	} 
	
	/*public function getData2($kategori2) // getData($kategori)
	{  
		$query = $this->db->get($kategori2); // get($kategori)
		return $query->result_array();
	}*/


	function getFormBeli($id, $kat) {
		
		$query = $this->db->query('select * from ' . $kat . ' where kodebarang="' . $id . '"');
		return $query->result_array(); 
	}

	function getFormBeliDeskripsi($id) {
		
		$query = $this->db->query('select * from kosmetik where kodebarang="' . $id . '"');
		return $query->result_array(); 
	}

	function getDataBeli() 
	{  
		$query = $this->db->get('penjualan');  
		return $query->result_array();  
	}

	function getDataKategori($where="") 
	{  
		$data = $this->db->query('select * from kosmetik ' .$where);  
		return $data->result_array();  
	}

	function getDataKategoriSkin($where="") 
	{  
		$data = $this->db->query('select * from skin ' .$where);  
		return $data->result_array();  
	}

	function getDataKategoriHair($where="") 
	{  
		$data = $this->db->query('select * from hair ' .$where);  
		return $data->result_array();  
	}

	function addData1($data) 
	{  
		$this->db->insert('kosmetik', $data); 
	} 

	function addData2($data) 
	{  
		$this->db->insert('hair', $data); 
	} 

	function addData3($data) 
	{  
		$this->db->insert('skin', $data); 
	} 

	function addDataBeli($data) 
	{  
		$this->db->insert('penjualan', $data);  
	}

	function Update($tableName, $data, $where)
	{
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function delete_item($nomor)
	{
		$this->db->where('nomor', $nomor);
		$this->db->delete('penjualan');
	}

	public function delete_kosmetik($kodebarang)
	{
		$this->db->where('kodebarang', $kodebarang);
		$this->db->delete('kosmetik');
	}

	public function delete_skin($kodebarang)
	{
		$this->db->where('kodebarang', $kodebarang);
		$this->db->delete('skin');
	}

	public function delete_hair($kodebarang)
	{
		$this->db->where('kodebarang', $kodebarang);
		$this->db->delete('hair');
	}

	
	public function login_authen($username,$password)
	{

		$this->db->select('*'); 
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		$this->db->from('admin');  
		$query = $this->db->get();  
			if ($query->num_rows() == 1) {  
			return true; 
			} 
			else{  
			return false; 
			}  
	}
	
	function authen_user($username)
	{  
		$this->db->select('authentication');  
		$this->db->where('username', $username);  
		$this->db->from('admin');  
		$query = $this->db->get();  
		return $query->result_array(); 
	} 
	
	function wrong_password($username, $value){  
		$this->db->set('authentication', $value);  
		$this->db->where("username", $username);  
		$this->db->update('admin'); 
		}
	
}
