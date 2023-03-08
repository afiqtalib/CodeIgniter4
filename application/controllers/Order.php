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
                        'dk_ayam'=>$_POST['dk_ayam'],
                        'dk_kambing'=>$_POST['dk_kambing'],
                        'dk_campur'=>$_POST['dk_campur'],
                        'd_ayam'=>$_POST['d_ayam'],
                        'd_kambing'=>$_POST['d_kambing'],
                        'd_campur'=>$_POST['d_campur'],
                        'created_date'=> date ('Y-m-d H:i:s'),
                        'date'=>$_POST['date'],
                        'time'=>$_POST['time'],
                        'link'=>$_POST['link'],
                        'location'=>$_POST['location'],
                        'remark'=>$_POST['remark'],
                        'status'=>'unpaid'
                    );
                    $this->db->insert('orders',$data);

                    $this->session->set_flashdata("success", "");
                    redirect("order", "refresh");
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
        }

        public function report() {            
            // All report orders
            $today = date('Y-m-d');
            $table ='orders';
            $where      = array(  'date >='	=> $today);
            $order_by   = array( 'date','asc');
            $order_by   = array( 'time','asc');
            $users_record=$this->query_Model->get_all_rows($table, $where, $order_by); 
            // $users_record=$this->query_Model->getDataOrders();
            $data['result'] = $users_record; 
            $data['dashboard']=$this->query_Model->count_order();
            $this->load->view('v_order_report',$data);
        }

        public function test_update_wasapmy() {
            $today = date('Y-m-d');
            $table     	= "user";
            $arrayData 	= array(
                            'rank' => 0,
                        );
            $where      = array(  
                            'rank' => 1,
                            'date_end !='  => '0000-00-00',
                            'date_end <'  => $today
                        );
            $this->query_Model->update_data($arrayData,$table,$where);
        }

        public function update_order1() {
            // $today = date('Y-m-d');
            $table     	= "orders";
            $arrayData 	= array(
                            'status' => 'paid',
                            'date'  => '0000-00-00',
                        );
            $where      = array(  
                            'time !='	=> '3',
                        );
            $this->query_Model->update_data($arrayData,$table,$where);
            // $this->load->view('v_order_report');
            $this->session->set_flashdata("success", "");
            redirect("order/report", "refresh");
        }

        // view order before edit
        public function update_order(){
            $id_order = $this->uri->segment(3);
    
    		$table = 'orders';
    		$where = array('id' => $id_order);
    		$data['view_data'] = $this->query_Model->get_specified_row($table,$where);
            $this->load->view('v_order_edit',$data);
        }

        public function edit_order(){
            // set rule/validate the input 
                $inputData = $this->input->post();

                $name = $this->input->post('name');
    		    $phone = $this->input->post('phone');
                $date = $this->input->post('date');
    		    $time = $this->input->post('time');
    		    $location = $this->input->post('location');
    		    $pay_type = $this->input->post('pay_type');
    		    $status = $this->input->post('status');
                $remark = $this->input->post('remark');

                $table      = 'orders';
                $arrayData = array (
                                'name' => $name,
                                'phone' => $phone,
                                'date' => $date,
                                'time' => $time,
                                'location'=> $location,
                                'pay_type' => $pay_type,
                                'status' => $status,
                                'remark' => $remark
                            );                    
                $where  = array('id' => $inputData['id']);
                $this->query_Model->update_data($arrayData,$table,$where);

                $table = "orders";
    	    	$where = array('id' => $inputData['id']);
    		    $data['view_data'] = $this->query_Model->get_specified_row($table,$where);

                echo 'okay dah';
                // redirect("auth/register", "refresh");  
            
            $this->load->view('v_order_edit', $data);
        }
            
        public function update_data() {
            // $today = date('Y-m-d');
            $id_order = $this->uri->segment(3);
            $table     	= "orders";
            $arrayData 	= array(
                            'status' => 'paid',
                        );
            $where      = array(  
                            'id'	=> $id_order
                        );
            $this->query_Model->update_data($arrayData,$table,$where);
            // $this->load->view('v_order_report');
            $this->session->set_flashdata("success", "");
            redirect("order/report", "refresh");
        }

        public function delete_order() {
            $id_order = $this->uri->segment(3);
    
    		$table = 'orders';
    		$where = array('id' => $id_order);
    		$this->query_Model->delete_data($table,$where);
            $this->load->view('v_order_report');
            // $this->load->view('v_order_report');
            $this->session->set_flashdata("success", "");
            redirect("order/report", "refresh");
        }



        

    }
?>
