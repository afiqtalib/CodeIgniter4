<?php 
class test extends CI_Controller 
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
}
?>

<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Help extends CI_Controller {  
      
    // public function index()  
    // {  
    //     $this->load->view("v_support_form");  
    // }
	
	// CURRENT
	public function index()  
    {
		// set rule/validate the input 
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('phone','Phone','required|min_length[10]|max_length[11]');
			$this->form_validation->set_rules('user_type','Type of User','required');
			$this->form_validation->set_rules('prob_type','Type of Problem','required');
			$this->form_validation->set_rules('message','Message','required');

			// if form validation
			if ($this->form_validation->run() == TRUE) {
				// echo 'form validated';
				date_default_timezone_set("Asia/Kuala_Lumpur");
				// insert add into db
				$data = array (
					'name' =>$_POST['name'],
					'phone'=>$_POST['phone'],
					'user_type'=>$_POST['user_type'],
					'prob_type'=>$_POST['prob_type'],
					'message'=>$_POST['message'],
					'date_created'=> date ('Y-m-d H:i:s'),
				);

				$this->db->insert('cust_services',$data);

				$this->session->set_flashdata("success", "");
				
				// this will execute after we submit the form (direct to the page HELP, refresh the page)
				redirect("Help", "refresh");
			}
		}
		// load view
		$this->load->view ('v_support_form');
    }  
}  
?>  