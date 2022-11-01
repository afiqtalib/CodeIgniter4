<?php 
    class Auth extends CI_Controller
    {
        public function register()
        {
            // echo 'hello world';
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
                        'email'=>$_POST['email'],
                        'password'=>$_POST['password'],
                        'gender'=>$_POST['gender'],
                        'created_date'=> date ('Y-m-d'),
                        'phone'=>$_POST['phone']
                    );

                    $this->db->insert('users',$data);

                    $this->session->set_flashdata("success", "Your account has been registered");
                    redirect("auth/register", "refresh");
                }
            }

            // load view
            $this->load->view ('register');
        }
    }
?> 