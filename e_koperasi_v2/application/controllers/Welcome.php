<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	 public function __construct(){
		
        parent::__construct();
		//session_start();
	    //MenLoad model yang berada di Folder Model dan UserModel
        $this->load->model('model');
        // Meload Library session 
       $this->load->library('session');
        //Meload database
        $this->load->database();
        //Meload url 
        $this->load->helper('url');
		$this->load->helper('form');   
    }
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('layout/header');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}


	Public function RegisterAnggota()
	{		
		
		$data['isi'] = $this->model->provinsi();
		//print_r($data);
		$this->load->view('layout/header');
		$this->load->view('RegisterAnggota',$data);
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
	//print_r($array);
	redirect(site_url('Welcome/berhasilDaftar/'));	
	}
	function berhasilDaftar(){
		$data['views'] = $this->model->TampilAnggotaBaru();
		$this->load->view('berhasilmendaftar',$data);
	}
	
	// function prosesLogin(){
	// 	$email = $this->input->post('email');
 //        $password = $this->input->post('password');
 //        $cek = $this->model->GetUser($email, $password);
 //        if($cek){
 //        $this->session->set_userdata('email_ang',$email['email_ang']);
	// 	$this->session->set_userdata('id_anggota',$cek['id_anggota']);
	// 	$this->session->set_userdata('nama_anggota',$cek['nama_anggota']);
	// 	redirect(site_url().'/welcome/Home_anggota/');
	// 	}else{
	// 		$data['error'] = 1 ;
	// 		$this->load->view('login',$data); 
	// 		}
	// }

	public function prosesLogin(){
			$this->load->model('model');

				$data['view']=" ";

				if(isset($_POST['signin'])){
					$cek=$this->model->login_user();
					$cek1=$this->model->login_admin();
					if($cek){
						$data=array(
							'id_anggota'	=> $cek->id_anggota,
							'nama_ang'		=> $cek->nama_ang,
							'email_ang'		=> $cek->email_ang,
							'user_ang'		=> $cek->user_ang,
							'password_ang'	=> $cek->password_ang,
							'level'			=> "anggota"
						);
						// Berfungsi untuk menyimpan user data
						$this->session->set_userdata($data);
						// $user = $this->session->userdata('username');
						redirect(base_url().'Halamananggota');
					}
					elseif($cek1){
						$data=array(
							'id_admin'		=> $cek1->id_anggota,
							'nama_admin'	=> $cek1->nama_admin,
							'username'		=> $cek1->username,
							'password'		=> $cek1->password,
							'level_admin'	=> "admin"
						);
						// Berfungsi untuk menyimpan user data
						$this->session->set_userdata($data);
						// $user = $this->session->userdata('username');
						redirect(base_url().'c_admin');
					}
					else{
						$data['error']="Email/Password Salah!";
						//$this->load->view('login',$data);
					}
				}
				
			$this->load->view('login',$data);
		}

	public function login(){
		// $data['error'] = 0 ;
		$this->load->view('login');
		}
	public function logout(){
			$this->session->sess_destroy();
			// $data['error'] = 0 ;
			$this->load->view('login');
	}
	
	// public function cek(){
	// 		if(!$this->session->userdata('email_ang')){
	// 			die(redirect(site_url('welcome')));
	// 		}
	// 	}

	// public function DataAnggota($data){

	// 	$val = $data['views'];
	// 	$dataAnggota = $this->model->id_anggota($val['IdKamar']);
	//     $dataSimpanan = $this->model->IdKost($dataKamar['IdKost']);
	// 	$dataPemilik = $this->model->IdPemilik($dataKamar['IdPemilik']);
	// 	$data['views']['dataPemilik'] = $dataPemilik;
		
	// 	$data['views']['dataKost'] = $dataKost;
	// 	$data['views']['dataKamar'] = $dataKamar;
	// 	return $data;
	// }

			
}