<?php

class Fungsi{

	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}

	function user_login() {
		$this->ci->load->model('siswa_model');
		$id_user = $this->ci->session->userdata('iduser');
		$user_data = $this->ci->siswa_model->get($id_user)->row();
		return $user_data;
	}

}
