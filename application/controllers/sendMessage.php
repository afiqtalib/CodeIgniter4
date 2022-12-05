<?php 
class sendMessage extends CI_Controller 
{
	public function __construct()
	{
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        
        /*load database libray manually*/
        $this->load->database();
        
        /*load Model*/
        $this->load->model('query_Model');
	}
        
    /*Insert*/
	public function savedata()
	{
		/*load send Message form*/
		$this->load->view('insert');
	
		/*Check submit button */
		if($this->input->post('submit'))
		{
		    $data['name']=$this->input->post('name');
			$data['phone']=$this->input->post('phone');
			$data['email']=$this->input->post('email');
            $data['user_type']=$this->input->post('user_type');
			$data['prob_type']=$this->input->post('prob_');
			$data['message']=$this->input->post('message');
			$response = $this->query_Model->saverecords($data);
			
            if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>