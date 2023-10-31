<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($data, $table)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update($table, $data);
	}

	// public function update_data($data, $table)
	// {
	// 	$this->db->where('id', $data['id']);
	// 	$this->db->update($table, $data);
	// }

	public function detail_data($id_siswa)
	{
		$query = $this->db->get_where('data_siswa', array('id_siswa' => $id_siswa))->row_array();
		return $query;
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function login($post)
	{
		// $this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
