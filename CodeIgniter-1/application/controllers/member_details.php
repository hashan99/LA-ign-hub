<?php 
	class member_details extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			$this-> load-> database();
			$this-> load-> helper('url');
			$this-> load-> model('member_details_model');
		}

		public function index()
		{
			$this-> load-> view('Home');
		}

		public function savedata()
		{
			$this-> load-> view('member_details_create');

			if($this-> input-> post('submit'))
			{
				$member_id = $this-> input-> post('member_id');
				$first_name = $this-> input-> post('first_name');
				$last_name = $this-> input-> post('last_name');
				$ign = $this-> input-> post('ign');
				$contact_number = $this-> input-> post('contact_number');
				$primary_game = $this-> input-> post('primary_game');

				$this-> member_details_model-> saverecords($member_id, $first_name, $last_name, $ign, $contact_number, $primary_game);

				echo "Records Saved Successfully";
				redirect("member_details/savedata");
			}
		}

		public function displaydata()
		{
			$result['data'] = $this-> member_details_model-> display_users();
			$this-> load-> view('member_details_display', $result);
		}

		public function displaydelete()
		{
			$result['data'] = $this-> member_details_model-> display_users();
			$this-> load-> view('member_details_delete', $result);
		}

		public function displayupdate()
		{
			$result['data'] = $this-> member_details_model-> display_users();
			$this-> load-> view('member_details_update', $result);
		}

		public function deletedata()
		{
			$Member_ID = $this-> input-> get('Member_ID');
			$this-> member_details_model-> delete_users($Member_ID);
			redirect("member_details/displaydelete");
		}

		public function updatedata()
		{
			$Member_ID = $this-> input-> get('Member_ID');
			$result ['data'] = $this-> member_details_model-> displayusersbymember_id($Member_ID);
			$this-> load-> view('member_details_update_form', $result);

			if($this-> input-> post('update'))
			{
				$member_id = $this-> input-> get('Member_ID');
				$first_name = $this-> input-> post('first_name');
				$last_name = $this-> input-> post('last_name');
				$ign = $this-> input-> post('ign');
				$contact_number = $this-> input-> post('contact_number');
				$primary_game = $this-> input-> post('primary_game');
				
				$this-> member_details_model-> update_users($member_id, $first_name, $last_name, $ign, $contact_number, $primary_game);
				echo "Records Saved Successfully";
				redirect("member_details/displaydata");

			}
		}
	}
 ?>