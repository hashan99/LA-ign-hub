<?php
class member_details_model extends CI_Model
{
	public function saverecords($member_id, $first_name, $last_name, $ign, $contact_number, $primary_game)
	{
		$query="insert into member_details values('$member_id', '$first_name', '$last_name', '$ign', '$contact_number', '$primary_game')";

		$this-> db-> query($query);
	}

	public function display_users()
	{
		$query = $this-> db-> query("select * from member_details");
		return $query -> result();
	}

	public function delete_users($Member_ID)
	{
		$this-> db-> query("delete from member_details where Member_ID='".$Member_ID."'");
	}

	public function displayusersbymember_id($Member_ID)
	{
		$query = $this-> db-> query("select * from member_details where Member_ID = '".$Member_ID."'");
		return $query-> result();
	}

	public function update_users($Member_ID, $First_Name, $Last_Name, $IGN, $Contact_Number, $Primary_Game)
	{
		$query = $this-> db-> query("update member_details SET first_name='$First_Name', last_name='$Last_Name', ign='$IGN', contact_number='$Contact_Number', primary_game='$Primary_Game' where Member_ID='".$Member_ID."'");
	}

	public function select_members()
	{
		return $this-> db-> get('member_details')-> result();
	}
}