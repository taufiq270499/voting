<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lihatdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        
    }
	public function index()
	{
		$data['record'] = $this->m_data->read_data()->result_array();

		$this->load->view('listdata',$data);
	}

	
}
