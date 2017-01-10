<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper(array('url','form'));
			$this->load->model('model','',TRUE);

			if ($this->session->userdata('username') == "") {
			    redirect('welcome/login');
			}
	}

	public function index()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$this->load->view('layout/header',$data);
		$this->load->view('halaman_admin');
		$this->load->view('layout/footer');
	}
	public function a_view_anggota()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$this->load->view('layout/header',$data);
		$query['dataanggota'] = $this->model->view_anggota()->result();
		$this->load->view('lihat_data_anggota',$query);
		$this->load->view('layout/footer');
	}
	public function daftar_anggota()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$data['isi'] = $this->model->provinsi();
		$this->load->view('layout/header',$data);
		$this->load->view('daftar_anggota_baru');
		$this->load->view('layout/footer');
	}
	function ProsesRegister(){
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			}
		}
		$ktp 	= (!empty($_FILES['ktp']['name'])) ? $_FILES['ktp']['name'] : "" ;
		if (strlen($ktp)>0) {
			if (is_uploaded_file($_FILES['ktp']['tmp_name'])) {
			move_uploaded_file($_FILES['ktp']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/ktp/".$ktp);
			}
		}
		
		$array = array(
			'noKtp_ang'=>$_POST['NoKTP'],
			'nama_ang'=>$_POST['Nama'],
			'tempat_lahir_ang'=>$_POST['tempat'],
			'tgl_lahir_ang'=>$_POST['tgl'],
			'jk_ang'=>$_POST['JenisKelamin'],
			'alamat_ang'=>$_POST['alamat'],
			'IdProvinsi'=>$_POST['IdProvinsi'],
			'IdKota'=>$_POST['IdKota'],
			'pekerjaan_ang'=>$_POST['pekerjaan'],
			'alamatkerja_ang'=>$_POST['alamatKerja'],
			'telp_ang'=>$_POST['NoHp'],
			'email_ang'=>$_POST['AlamatEmail'],
			'user_ang'=>$_POST['username'],
			'password_ang'=>$_POST['password'],
			'level'=>'anggota',
			'status_ang'=>'aktif',
			'pas_foto_ang'=>"image/foto/".$foto,
			'ktp_ang'=>"image/ktp/".$ktp,
			'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->model->AddAnggota($array);
		redirect(site_url('c_admin/a_view_anggota'));	
	}

	// public function edit_level()
	// {
	// 	$data['view_admin'] = $this->model->TampilAdmin();
	// 	$this->load->view('layout/header',$data);
	// 	$this->load->view('edit_level');
	// 	$this->load->view('layout/footer');
	// }

	public function a_view_anggota_nonAktif()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$this->load->view('layout/header',$data);
		$query['dataanggota'] = $this->model->view_anggota_nonAktif()->result();
		$this->load->view('list_anggota_nonAktif',$query);
		$this->load->view('layout/footer');
	}

	public function detail_anggota_nonAktif($id)
	{
		$data['views'] = $this->model->TampilPengunduranDiri($id);
		$this->load->view('layout/header',$data);
		$this->load->view('anggota_nonAktif',$data);
		$this->load->view('layout/footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
	public function detail_anggota($id)
	{
		$data['views'] = $this->model->ad_TampilAnggota($id);
		$this->load->view('layout/header',$data);
		$this->load->view('anggota_Aktif',$data);
		$this->load->view('layout/footer');
		
		//$this->load->view('hal_anggota',$data);	
	}

	public function a_view_supplier()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$this->load->view('layout/header',$data);
		$query['datasupplier'] = $this->model->view_supplier()->result();
		$this->load->view('lihat_data_supplier',$query);
		$this->load->view('layout/footer');
	}
	public function daftar_supplier()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$data['isi'] = $this->model->provinsi();
		$this->load->view('layout/header',$data);
		$this->load->view('daftar_supplier_baru');
		$this->load->view('layout/footer');
	}
	function ProsesRegisterSupplier(){
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			}
		}
		$ktp 	= (!empty($_FILES['ktp']['name'])) ? $_FILES['ktp']['name'] : "" ;
		if (strlen($ktp)>0) {
			if (is_uploaded_file($_FILES['ktp']['tmp_name'])) {
			move_uploaded_file($_FILES['ktp']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/ktp/".$ktp);
			}
		}
		
		$array = array(
			'noKtp_sup'=>$_POST['NoKTP'],
			'nama_sup'=>$_POST['Nama'],
			'tempat_lahir_sup'=>$_POST['tempat'],
			'tgl_lahir_sup'=>$_POST['tgl'],
			'jk_sup'=>$_POST['JenisKelamin'],
			'alamat_sup'=>$_POST['alamat'],
			'IdProvinsi_sup'=>$_POST['IdProvinsi'],
			'IdKota_sup'=>$_POST['IdKota'],
			'pekerjaan_sup'=>$_POST['pekerjaan'],
			'alamatkerja_sup'=>$_POST['alamatKerja'],
			'telp_sup'=>$_POST['NoHp'],
			'email_sup'=>$_POST['AlamatEmail'],
			'user_sup'=>$_POST['username'],
			'password_sup'=>$_POST['password'],
			'level_sup'=>'supplier',
			'status_sup'=>'aktif',
			'pas_foto_sup'=>"image/foto/".$foto,
			'ktp_sup'=>"image/ktp/".$ktp,
			'tgl_daftar_sup'=>$_POST['tgldaftar']
		);
		$this->model->AddSupplier($array);
		redirect(site_url('c_admin/a_view_supplier'));	
	}

	function AnggotaKeSupplier(){
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			}
		}
		$ktp 	= (!empty($_FILES['ktp']['name'])) ? $_FILES['ktp']['name'] : "" ;
		if (strlen($ktp)>0) {
			if (is_uploaded_file($_FILES['ktp']['tmp_name'])) {
			move_uploaded_file($_FILES['ktp']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/ktp/".$ktp);
			}
		}
		
		$array = array(
			'noKtp_sup'=>$_POST['NoKTP'],
			'nama_sup'=>$_POST['Nama'],
			'tempat_lahir_sup'=>$_POST['tempat'],
			'tgl_lahir_sup'=>$_POST['tgl'],
			'jk_sup'=>$_POST['JenisKelamin'],
			'alamat_sup'=>$_POST['alamat'],
			'IdProvinsi_sup'=>$_POST['IdProvinsi'],
			'IdKota_sup'=>$_POST['IdKota'],
			'pekerjaan_sup'=>$_POST['pekerjaan'],
			'alamatkerja_sup'=>$_POST['alamatKerja'],
			'telp_sup'=>$_POST['NoHp'],
			'email_sup'=>$_POST['AlamatEmail'],
			'user_sup'=>$_POST['username'],
			'password_sup'=>$_POST['password'],
			'level_sup'=>'supplier',
			'status_sup'=>'aktif',
			'pas_foto_sup'=>$_POST['foto'],
			'ktp_sup'=>$_POST['ktp'],
			'tgl_daftar_sup'=>$_POST['tgldaftar']
		);
		$this->model->AddSupplier($array);
		redirect(site_url('c_admin/a_view_supplier'));	
	}

	public function detail_supplier($id)
	{
		$data['views'] = $this->model->ad_TampilSupplier($id);
		$this->load->view('layout/header',$data);
		$this->load->view('detail_dtsupplier',$data);
		$this->load->view('layout/footer');
	}

	public function a_view_pegawai()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$this->load->view('layout/header',$data);
		$query['datapegawai'] = $this->model->view_pegawai()->result();
		$this->load->view('lihat_data_pegawai',$query);
		$this->load->view('layout/footer');
	}
	public function daftar_pegawai()
	{
		$data['view_admin'] = $this->model->TampilAdmin();
		$data['isi'] = $this->model->provinsi();
		$this->load->view('layout/header',$data);
		$this->load->view('daftar_pegawai_baru');
		$this->load->view('layout/footer');
	}
	function ProsesRegisterPegawai(){
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			}
		}
		$ktp 	= (!empty($_FILES['ktp']['name'])) ? $_FILES['ktp']['name'] : "" ;
		if (strlen($ktp)>0) {
			if (is_uploaded_file($_FILES['ktp']['tmp_name'])) {
			move_uploaded_file($_FILES['ktp']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/ktp/".$ktp);
			}
		}
		
		$array = array(
			'noKtp_peg'=>$_POST['NoKTP'],
			'nama_peg'=>$_POST['Nama'],
			'tempat_lahir_peg'=>$_POST['tempat'],
			'tgl_lahir_peg'=>$_POST['tgl'],
			'jk_peg'=>$_POST['JenisKelamin'],
			'alamat_peg'=>$_POST['alamat'],
			'IdProvinsi_peg'=>$_POST['IdProvinsi'],
			'IdKota_peg'=>$_POST['IdKota'],
			'pekerjaan_peg'=>$_POST['pekerjaan'],
			'alamatkerja_peg'=>$_POST['alamatKerja'],
			'telp_peg'=>$_POST['NoHp'],
			'email_peg'=>$_POST['AlamatEmail'],
			'user_peg'=>$_POST['username'],
			'password_peg'=>$_POST['password'],
			'level_peg'=>$_POST['level'],
			'status_peg'=>'aktif',
			'pas_foto_peg'=>"image/foto/".$foto,
			'ktp_peg'=>"image/ktp/".$ktp,
			'tgl_daftar_peg'=>$_POST['tgldaftar']
		);
		$this->model->AddPegawai($array);
		redirect(site_url('c_admin/a_view_pegawai'));	
	}

	public function detail_pegawai($id)
	{
		$data['views'] = $this->model->ad_TampilPegawai($id);
		$this->load->view('layout/header',$data);
		$this->load->view('detail_dtpegawai',$data);
		$this->load->view('layout/footer');
	}

	public function edit_anggota_sup($id)
	{
		$data['views'] = $this->model->ad_TampilAnggota($id);
		$this->load->view('layout/header',$data);
		$this->load->view('ang_sup',$data);
		$this->load->view('layout/footer');
	}

}

/* End of file c_admin.php */
/* Location: ./application/controllers/c_admin.php */