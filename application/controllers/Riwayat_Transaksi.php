<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class Riwayat_Transaksi extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array(
			'title' => "Your title"
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('V_riwayattransaksi', $data);
		$this->load->view('_partials/footer', $data); 
	}
}
?>