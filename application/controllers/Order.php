<?php  defined('BASEPATH') OR exit('No direct script access allowed');  
class Order extends CI_Controller 
{
	public function index()
    {
        // set rule/validate the input 
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('phone','Phone','required|min_length[10]|max_length[11]');
            $this->form_validation->set_rules('date','Tarikh','required');
            $this->form_validation->set_rules('time','Masa','required');
            $this->form_validation->set_rules('link','Link Google Maps','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('remark','Remark','required');

            // if form validation
            if ($this->form_validation->run() == TRUE) {
                // echo 'form validated';

                // insert into db
                $data = array (
                    'name' =>$_POST['name'],
                    'phone'=>$_POST['phone'],
                    'p_ayam'=>$_POST['p_ayam'],
                    'p_kambing'=>$_POST['p_kambing'],
                    'p_campur'=>$_POST['p_campur'],
                    'd_ayam'=>$_POST['d_ayam'],
                    'd_kambing'=>$_POST['d_kambing'],
                    'd_campur'=>$_POST['d_campur'],
                    'created_date'=> date ('Y-m-d H:i:s'),
                    'date'=>$_POST['date'],
                    'time'=>$_POST['time'],
                    'link'=>$_POST['link'],
                    'location'=>$_POST['location'],
                    'remark'=>$_POST['remark']
                );
                $this->db->insert('orders',$data);

                $this->session->set_flashdata("success", "");
                // redirect("auth/register", "refresh");
            }
        }
        // load view
        $this->load->view ('v_order_form');
    }

    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        date_default_timezone_set("Asia/Kuala_Lumpur");

        $this->load->helper('url');
        // Load Pagination library 
        $this->load->library('pagination');

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('query_Model');
    }

    public function report() {
        // All records count      
        $users_record=$this->query_Model->getDataOrders();
        $data['result'] = $users_record; 
        $this->load->view('v_order_report',$data);
    }

    public function update_order1() {
        $table     	= "orders";
        $arrayData 	= array(
                        'status' => 'last thahary',
                    );
        $where      = array(  
                        'time'	=> '2',
                        'location' => '2'
                    );
        $query = $this->query_Model->update_data($arrayData,$table,$where);
            if($query==true) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

                echo '<script type="text/javascript">sweetAlert("fsafsa !","Ansfm","error")</script>';
            }
            else {
                echo '<script type="text/javascript">sweetAlert("Success !","Anda telah berjaya mengisi form","success")</script>';
            }
    }

    public function update_order(){
		$this->load->database();
		$this->load->model('query_Model');
		$this->query_Model->update_row();		
		// redirect("", "refresh");

	}

}
