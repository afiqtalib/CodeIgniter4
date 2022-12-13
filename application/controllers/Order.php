<?php  
class Order extends CI_Controller 
{
	public function index()
        {
            // set rule/validate the input 
            if (isset($_POST['submit'])) {
                $this->form_validation->set_rules('name','Name','required');
                $this->form_validation->set_rules('phone','Phone','required|min_length[10]|max_length[11]');
                // $this->form_validation->set_rules('p_ayam');
                // $this->form_validation->set_rules('p_kambing');
                // $this->form_validation->set_rules('p_campur');
                // $this->form_validation->set_rules('d_ayam');
                // $this->form_validation->set_rules('d_kambing');
                // $this->form_validation->set_rules('d_campur');
                $this->form_validation->set_rules('date','Tarikh','required');
                $this->form_validation->set_rules('time','Masa','required');
                $this->form_validation->set_rules('link','Link Google Maps','required');
                $this->form_validation->set_rules('location','Location','required');
                $this->form_validation->set_rules('remark','Location','required');

                // if form validation
                if ($this->form_validation->run() == TRUE) {
                    // echo 'form validated';
                    date_default_timezone_set("Asia/Kuala_Lumpur");

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
}
