<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Convert_m');
	}

    public function index()
	{
		$data = array('title' => 'Main Display', 
			          'content' => 'main',
			          );
		$this->load->view('layouts/wrapper', $data, FALSE);
	}

	public function get_data()
	{
		$execute_conv_1 = $this->Convert_m->conv_1();
		$execute_conv_2 = $this->Convert_m->conv_2();
		$execute_conv_3 = $this->Convert_m->conv_3();
		$execute_conv_4 = $this->Convert_m->conv_4();
		$execute_conv_5 = $this->Convert_m->conv_5();
		$execute_conv_6 = $this->Convert_m->conv_6();
		$execute_conv_7 = $this->Convert_m->conv_7();
		$execute_conv_8 = $this->Convert_m->conv_8();
        $data = array('title'  => 'Display',
        			  'query1' => $execute_conv_1,
        			  'query2' => $execute_conv_2,
        			  'query3' => $execute_conv_3,
        			  'query4' => $execute_conv_4,
        			  'query5' => $execute_conv_5,
        			  'query6' => $execute_conv_6,
        			  'query7' => $execute_conv_7,
        			  'query8' => $execute_conv_8
		       );
		$this->load->view('execute', $data, FALSE);
	}	

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */