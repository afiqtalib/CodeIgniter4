<?php 
class Employee extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Emp_model');
	}
        
    /*Insert*/
	public function add()
	{
		/*load registration view form*/
		$this->load->view('employee');
	
		/*Check submit button */
		if($this->input->post('submit'))
		{
		    $data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['username']=$this->input->post('username');
			$data['phonenum']=$this->input->post('phonenum');
			$data['password']=$this->input->post('password');
			$response=$this->Emp_model->saverecords($data);
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