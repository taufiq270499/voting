<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        	if ($this->session->userdata('akses')=='1') {
			redirect(base_url('Dashboard'));
		}elseif ($this->session->userdata('akses')=='2') {
			redirect(base_url('Dashboard_admin'));
		}
        // $this->load->model('m_user');
        
        $this->load->library('session');
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function daftarlogin()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telp = $this->input->post('telp');
 		
 		$sql = $this->db->query("SELECT email FROM user where email='$email'");
$cek = $sql->num_rows();
if ($cek > 0) {
$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		tidak bisa memilih kembali <br> karena anda sudah memilih </div>');
redirect(site_url('welcome'));
		}else{
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'telp' => $telp
			);
		$this->db->insert('user',$data);
		$this->_login();
	}
}

	private function _login()
	{
		$nama = $this->input->post('nama');
		
		 $username = $this->input->post('email');

		 $telp = $this->input->post('telp');
 

    $user = $this->db->get_where('user', ['nama' => $nama])->row_array();


        //jika usernya ada
    if ($user) {
            //jika usernya aktif
       
            $data = [
               'nama' => $nama,
			'email' => $email,
			'telp' => $telp
            ];
            $this->session->set_userdata($data);
                    //masuk ke user
            $this->session->set_userdata('akses','1');
            $this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata($data);
           redirect('dashboard');
        } else {
            $this->session->set_flashdata('flash','Password Salah');
            redirect('auth');
        }
    

	} 

	public function tks()
	{
		$this->load->view('v_tks');
	}
}
