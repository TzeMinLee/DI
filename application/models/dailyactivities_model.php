<?php 
	class Dailyactivities_model extends CI_Model
	{
		public function select()
		{
			$query = $this->db->query('SELECT * FROM oldfolkshome_daily_activities ORDER BY ofh_activity_day, ofh_activity_time ASC');

			return $query->result();
		}

		public function delete($id)
		{
			if ($this->db->query('DELETE FROM oldfolkshome_daily_activities WHERE ofh_activity_id = ' . $id))
			{
				redirect('Main/home');
			}
			else
			{
				echo "Failed";
			}
		}
	}
 ?>