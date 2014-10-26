<?php 

class user_model extends CI_Model {
	

public function isPresent($sid,$email,$provider){
	
	 $query= $this->db->query("select * from attendee where sid='$sid' and email='$email' and network='$provider'");
        $count=$query->num_rows();
        if($count>1 || $count<1){
            return 0;
        }
        
        else{
            return 1;
        }
	
}


  public function getuser_data($id,$email){
        $query= $this->db->query("select * from attendee where sid='$id' or email='$email'");
        return $query->row();
    }


 public function register($attendee_info){
     

        
       if($this->db->insert('attendee', $attendee_info))
       {
           return 1;
       }
 else {
           return 0;
       }
    }
    
    public function getID($sid,$email,$network)
    {
		$query= $this->db->query("select * from attendee where sid='$sid' and email='$email' and network='$network' LIMIT 1");
		foreach($query->result() as $r){
			$id=$r->id;
		}
        return $id;
	}
    
    
    
}

?>
