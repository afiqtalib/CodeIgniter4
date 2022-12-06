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
  
class sendMessage extends CI_Controller {  
      
    // public function index()  
    // {  
    //     $this->load->view("v_support_form");  
    // }  
    
	// take contoh form
	public function register()
        {
            // set rule/validate the input 
            if (isset($_POST['register'])) {
                $this->form_validation->set_rules('name','Name','required');
                $this->form_validation->set_rules('email','Email','required');
                $this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[8]');
                $this->form_validation->set_rules('gender','Gender','required');
                $this->form_validation->set_rules('phone','Phone','required|min_length[10]|max_length[11]');


                // if form validation
                if ($this->form_validation->run() == TRUE) {
                    echo 'form validated';

                    // insert add into db
                    $data = array (
                        'name' =>$_POST['name'],
						'phone'=>$_POST['phone'],
						'user_type'=>$_POST['user_type'],
                        'prob_type'=>$_POST['prob_type'],
                        'phone'=>$_POST['phone'],
                        'created_date'=> date ('Y-m-d'),
                    );

                    $this->db->insert('users',$data);

                    $this->session->set_flashdata("success", "Your account has been registered");
                    redirect("auth/register", "refresh");
                }
            }

            // load view
            $this->load->view ('register');



			// code yg asal
			// yg asal 
			date_default_timezone_set("Asia/Kuala_Lumpur");
			//this array is used to get fetch data from the view page.  
			$data = array(  
							'name'     => $this->input->post('name'),  
							'phone'  => $this->input->post('phone'),  
							'user_type'   => $this->input->post('user_type'),
							'prob_type'   => $this->input->post('prob_type'),  
							'message' => $this->input->post('message'), 
							'date_created'=> date ('Y-m-d H:i:s')
							);  
			//insert data into database table.  
			$response = $this->db->insert('cust_services',$data);  

			// $response = $this->query_Model->save_records($data);
				
				if($response==true){
						echo "Records Saved Successfully TQ";
						redirect("sendMessage/index");  
				}
				else{
						echo "Insert error !";
				}
			// redirect("sendMessage/index");  
        }
	
		// also can use public function <name>
	public function savingdata()  
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
				echo 'form validated';

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

				$this->session->set_flashdata("success", "Successfully submit your message");
				redirect("sendMessage/savingdata", "refresh");
			}
		}
		// load view
		$this->load->view ('v_support_form');

		
    }  
}  
?>  