<?php
class pdf_Controller extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this-> load-> library('pdf_Library');
		$this-> load-> model('member_details_model');
	}
	public function generate_pdf_report(){
		$data['member_details'] = $this-> member_details_model-> select_members();
		$this-> load-> view('members_report', $data);
	}
}