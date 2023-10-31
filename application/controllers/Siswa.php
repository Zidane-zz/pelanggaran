<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{
		$data['title'] = 'Siswa';
		$data['siswa'] = $this->siswa_model->get_data('data_siswa')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Siswa';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_siswa');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'NISN' => $this->input->POST('NISN'),
				'NAMA' => $this->input->POST('NAMA'),
			
				'TANGGAL' => $this->input->POST('TANGGAL'),
				'JENIS_KELAMIN' => $this->input->POST('JENIS_KELAMIN'),
		
				'JURUSAN' => $this->input->POST('JURUSAN'),
			);
			$this->siswa_model->insert_data($data, 'data_siswa');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('siswa');
		}
	}


	public function update($id_siswa)
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'id_siswa' => $id_siswa,
				'NISN' => $this->input->POST('NISN'),
				'NAMA' => $this->input->POST('NAMA'),
				
				'TANGGAL' => $this->input->POST('TANGGAL'),
				'JENIS_KELAMIN' => $this->input->POST('JENIS_KELAMIN'),
			
			
				'JURUSAN' => $this->input->POST('JURUSAN'),
			);

			$this->siswa_model->update_data($data, 'data_siswa');
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
			Data Berhasil di Ubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('siswa');
		}
	}

	// public function edit($id)
	// {
	// 	$this->_rules();

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->index();
	// 	} else {
	// 		$data = array(
	// 			'id' => $id,
	// 			'NISN' => $this->input->POST('NISN'),
	// 			'NAMA' => $this->input->POST('NAMA'),
	// 			'TEMPAT_LAHIR' => $this->input->POST('TEMPAT_LAHIR'),
	// 			'TANGGAL_LAHIR' => $this->input->POST('TANGGAL_LAHIR'),
	// 			'JENIS_KELAMIN' => $this->input->POST('JENIS_KELAMIN'),
	// 			'AGAMA' => $this->input->POST('AGAMA'),
	// 			'ALAMAT' => $this->input->POST('ALAMAT'),
	// 			'NO_HP' => $this->input->POST('NO_HP'),
	// 			'SEKOLAH_ASAL' => $this->input->POST('SEKOLAH_ASAL'),
	// 			'JURUSAN' => $this->input->POST('JURUSAN'),
	// 			'NAMA_AYAH' => $this->input->POST('NAMA_AYAH'),
	// 			'NAMA_IBU' => $this->input->POST('NAMA_IBU'),
	// 			'NAMA_WALI' => $this->input->POST('NAMA_WALI'),
	// 			'HOBI' => $this->input->POST('HOBI'),
	// 		);

	// 		$this->siswa_model->update_data($data, 'data_siswa');
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 		Data Berhasil Diedit!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 		<span aria-hidden="true">&times;</span></button></div>');
	// 		redirect('siswa');
	// 	}
	// }

	public function detail($id_siswa)
	{
		$data['title'] = 'detail data';
		$data['siswa'] = $this->siswa_model->detail_data($id_siswa);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('detail', $data);

		// $this->load->model('Siswa_model');
		// $detail = $this->siswa_model->detail_data($id_siswa);
		// $data = $detail;

		// $this->load->view('templates/header', $data);
		// $this->load->view('templates/sidebar', $data);
		// $this->load->view('detail', $data);
		// $this->load->view('templates/footer');
	}

	public function print()
	{
		$data['siswa'] =  $this->siswa_model->get_data('data_siswa')->result();
		$this->load->view('print_siswa', $data);
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['siswa'] =  $this->siswa_model->get_data('data_siswa')->result();
		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_siswa.pdf", array('Attachment' => 0));
	}

	public function _rules()
	{
		$this->form_validation->set_rules('NISN', 'NISN', 'required|min_length[10]', array(
			'required' => '%s harus diisi!',
		));
		$this->form_validation->set_rules('NAMA', 'NAMA', 'required', array(
			'required' => '%s harus diisi!'
		));
		
		$this->form_validation->set_rules('TANGGAL', 'TANGGAL', 'required', array(
			'required' => '%s harus diisi!'
		));

		
	}

	public function delete($id)
	{
		$where = array('id_siswa' => $id);

		$this->siswa_model->delete($where, 'data_siswa');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil di Hapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');
		redirect('siswa');
	}
}
