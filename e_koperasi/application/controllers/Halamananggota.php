<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamananggota extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper(array('url','form'));
			$this->load->model('model','',TRUE);

			if ($this->session->userdata('user_ang') == "") {
			    redirect('welcome/login');
			}
	}
	
	public function index()
	{
		$data['views'] = $this->model->TampilAnggota();
		$this->load->view('layout/header',$data);
		$this->load->view('hal_anggota',$data);
		$this->load->view('layout/footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
	public function hal_dtanggota()
	{
		$data['views'] = $this->model->TampilAnggota();
		$this->load->view('layout/header',$data);
		$this->load->view('coba',$data);
		$this->load->view('layout/footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
	public function updatePassword()
	{
		$data['views'] = $this->model->TampilAnggota();
		$this->load->view('layout/header',$data);
		$this->load->view('gantipassword',$data);
		$this->load->view('layout/footer');
		
	
	}
	
	public function updatePhoto()
	{
		$data['views'] = $this->model->TampilAnggota();
		$this->load->view('layout/header',$data);
		$this->load->view('gantifoto',$data);
		$this->load->view('layout/footer');
	
	}
	
	public function ProsesupdatePassword($id)
	{
	
		$array = array(
		'noKtp_ang'=>$_POST['NoKTP'],
		'nama_ang'=>$_POST['Nama'],
		'tempat_lahir_ang'=>$_POST['tempat'],
		'tgl_lahir_ang'=>$_POST['tgl'],
		'jk_ang'=>$_POST['jk'],
		'alamat_ang'=>$_POST['alamat'],
		'pekerjaan_ang'=>$_POST['pekerjaan'],
		'alamatkerja_ang'=>$_POST['alamatKerja'],
		'telp_ang'=>$_POST['NoHp'],
		'email_ang'=>$_POST['AlamatEmail'],
		'user_ang'=>$_POST['username'],
		'password_ang'=>$_POST['password'],
		'level'=>'anggota',
		'status_ang'=>'aktif',
		'pas_foto_ang'=>$_POST['foto'],
		'ktp_ang'=>$_POST['ktp'],
		'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->model->UpdatePassword($array,$id);
	redirect(site_url('halamananggota/'));
	
	}
	
    public function ProsesupdatePhoto($id)
	{
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
		move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			}
		}
	
		$array = array(
		'noKtp_ang'=>$_POST['NoKTP'],
		'nama_ang'=>$_POST['Nama'],
		'tempat_lahir_ang'=>$_POST['tempat'],
		'tgl_lahir_ang'=>$_POST['tgl'],
		'jk_ang'=>$_POST['jk'],
		'alamat_ang'=>$_POST['alamat'],
		'pekerjaan_ang'=>$_POST['pekerjaan'],
		'alamatkerja_ang'=>$_POST['alamatKerja'],
		'telp_ang'=>$_POST['NoHp'],
		'email_ang'=>$_POST['AlamatEmail'],
		'user_ang'=>$_POST['username'],
		'password_ang'=>$_POST['password'],
		'level'=>'anggota',
		'status_ang'=>'aktif',
		'pas_foto_ang'=>"image/foto/".$foto,
		'ktp_ang'=>$_POST['ktp'],
		'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->model->UpdatePassword($array,$id);
	redirect(site_url('halamananggota/'));
	
	}

	public function undurdiri()
	{
		$data['views'] = $this->model->TampilAnggota();
		$this->load->view('layout/header',$data);
		$this->load->view('form_undur_diri',$data);
		$this->load->view('layout/footer');
		
		//$this->load->view('hal_anggota',$data);
	}

	function Pengundurandiri($id){
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
			'Id_anggota'=>$_POST['id_anggota'],
			'noKtp_ang'=>$_POST['NoKTP'],
			'nama_ang'=>$_POST['Nama'],
			'tempat_lahir_ang'=>$_POST['tempat'],
			'tgl_lahir_ang'=>$_POST['tgl'],
			'jk_ang'=>$_POST['jk'],
			'alamat_ang'=>$_POST['alamat'],
			'pekerjaan_ang'=>$_POST['pekerjaan'],
			'alamatkerja_ang'=>$_POST['alamatKerja'],
			'telp_ang'=>$_POST['NoHp'],
			'email_ang'=>$_POST['AlamatEmail'],
			'user_ang'=>$_POST['username'],
			'password_ang'=>$_POST['password'],
			'level'=>'anggota',
			'status_ang'=>'tidak aktif',
			'pas_foto_ang'=>$_POST['foto'],
			'ktp_ang'=>$_POST['ktp'],
			'tgl_daftar'=>$_POST['tgldaftar'],
			'tgl_keluar'=>$_POST['tglPengunduran']
		);
		$this->model->AddPengunduranDiri($array);
		$this->model->deleteAnggota($id);
		//mysql_query("DELETE FROM tb_anggota WHERE id_anggota = '".$id."'");
		redirect(site_url('welcome/login'));
	}

}

/* End of file halamanAnggota.php */
/* Location: ./application/controllers/halamanAnggota.php */