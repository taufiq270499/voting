<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		 parent::__construct();
         if ($this->session->userdata('akses')=='2') {
        redirect(base_url('Halaman_admin'));
    }
    elseif ($this->session->userdata('masuk')!= TRUE) {
     redirect(base_url('Welcome'));
        // $this->load->model('m_user');
        }
        $this->load->library('session');

	}



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
	 */
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$this->load->view('v_dashboard', $data);
	}

	public function inputpilihan()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 5) {
				$this->session->set_flashdata('message1', '<div class="alert alert-danger" role="alert">
					kuota coach adiwinata liem sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan2()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 5) {
				$this->session->set_flashdata('message2', '<div class="alert alert-danger" role="alert">
					kuota coach vonny ramali sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan3()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 3) {
				$this->session->set_flashdata('message3', '<div class="alert alert-danger" role="alert">
					kuota coach ANDRE WIJAYA sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan4()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 2) {
				$this->session->set_flashdata('message4', '<div class="alert alert-danger" role="alert">
					kuota coach PHILIPUS INDRA TJAHJANA sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan5()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 2) {
				$this->session->set_flashdata('message5', '<div class="alert alert-danger" role="alert">
					kuota coach ADITHIA AMIDJAYA sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan6()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 1) {
				$this->session->set_flashdata('message6', '<div class="alert alert-danger" role="alert">
					kuota coach RAHMADSYAH sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan7()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 0) {
				$this->session->set_flashdata('message7', '<div class="alert alert-danger" role="alert">
					kuota coach VERLY NURSANTO sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function inputpilihan8()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 0) {
				$this->session->set_flashdata('message8');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/tks');
			}
		}
	}

	public function inputpilihan9()
	{
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$pilihan = $this->input->post('pilihan');
			$sql = $this->db->query("SELECT pilihan FROM pilih where pilihan='$pilihan'");
			$cek = $sql->num_rows();
			if ($cek > 1) {
				$this->session->set_flashdata('message9', '<div class="alert alert-danger" role="alert">
					kuota coach SALIM SUTIONO sudah penuh, silahkan pilih coach yang lain. terimakasih. :)</div>');
				redirect(site_url('Dashboard'));
			}else{
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'telp' => $telp,
					'pilihan' => $pilihan
				);
				$this->db->insert('pilih',$data);
				redirect('Dashboard/logout');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		session_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kamu telah berhasil keluar ! </div>');
		redirect('Welcome');
	}

	public function tks()
	{
		$this->session->unset_userdata('nama');
		session_destroy();
		redirect('Welcome/tks');
	}

}
