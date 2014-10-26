<?php 

/**
* 
*/
class register extends CI_Controller

{
	

	public function post(){


$attendee_info=array(
'sid'=>$this->input->post('sid'),
'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'mobile'=>$this->input->post('mobile'),
'gender'=>$this->input->post('gender'),
'college'=>$this->input->post('college'),
'year'=>$this->input->post('year'),
'department'=>$this->input->post('department'),
'network'=>$this->input->post('network'),
'web'=>$this->input->post('web'),
'paper'=>$this->input->post('paper'),
'code'=>$this->input->post('code'),
'debug'=>$this->input->post('debug'),
'game'=>$this->input->post('game'),
'quiz'=>$this->input->post('quiz'),
'photo'=>$this->input->post('photo'),
);

	
				
		
					

					$this->load->model('user_model');



			if($this->user_model->ispresent($attendee_info['sid'],$attendee_info['email'],$attendee_info['network']))
{
			$this->session->set_userdata('exists',TRUE);
				$uniqid=$this->user_model->getID($attendee_info['sid'],$attendee_info['email'],$attendee_info['network']);
				
				$this->session->set_userdata('uniqid',$uniqid);
			redirect('register/exists');
			}
			else
		{

		if($this->user_model->register($attendee_info)){
			
				$this->session->set_userdata('done',TRUE);
			$uniqid=$this->user_model->getID($attendee_info['sid'],$attendee_info['email'],$attendee_info['network']);
			$this->session->set_userdata('uniqid',$uniqid);
			redirect('register/complete/');
          }
      }
	}
	
	
	public function complete(){
		
		if($this->session->userdata('done')==TRUE)
		{
			$data['uniqid']=$this->session->userdata('uniqid');
			 $this->load->view('success',$data);
			 $this->session->unset_userdata('done');
			  $this->session->unset_userdata('uniqid');
		}
		else{
			redirect('welcome');
		}
		
}
public function exists(){
		
		if($this->session->userdata('exists')==TRUE)
		{
			$data['uniqid']=$this->session->userdata('uniqid');
			 $this->load->view('exists',$data);
			 $this->session->unset_userdata('exists');
			 $this->session->unset_userdata('uniqid');
			 
		}
		else{
			redirect('welcome');
		}
		
}
}
?>
