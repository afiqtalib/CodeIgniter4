<?php 
    class Auth extends CI_Controller
    {
        public function __construct()
        {
            /*call CodeIgniter's default Constructor*/
            parent::__construct();

            /*load database libray manually*/
            $this->load->database();

            /*load Model*/
            $this->load->model('Auth_model');
        }
        
            /*Display DATA*/
            public function displaydata()
        {
            $result['data']=$this->Auth_model->get_display_records();
            $this->load->view('v_display_records',$result);
        }
        

        // FORM LOGIN & REGISTER
        public function logout ()
        {
            unset ($_SESSION);
            session_destroy();
            redirect("auth/login", "refresh");
        }
        
        public function login ()
        {
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            if ($this->form_validation->run() == TRUE) {
                
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                // check user in database 
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where(array('email'=>$email, 'password'=>$password));
                $query = $this->db->get();

                $user = $query->row();
                // if user are exist
                if ($user->phone) {

                    // temporary message
                    $this->session->set_flashdata("success", "You are logged in");

                    // set session variable  
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['email'] = $user->email;

                    // redirect to profile page/ index
                    redirect("user/profile", "refresh");

                } else {
                    $this->session->set_flashdata("error", "NO!!! your account are not exist oiin database");
                    redirect("auth/login", "refresh"); 
                }         
            }
            $this->load->view ('login');
        }

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