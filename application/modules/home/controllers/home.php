<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        
        $this->load->model('home/home_model');
        
        parent::__construct();
          
    }


    function index()
    {
        $data[''] = '';
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/v_home';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_home_template($data);
    }


    function services()
    {
        $data[''] = '';
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/services';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_home_template($data);
    }

    function about()
    {
        $data[''] = '';
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/about';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_home_template($data);
    }



    function contact()
    {
        $data[''] = '';
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';

        $this->template->call_home_template($data);
    } 
        

    function portfolio(){
        $data['']='';
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1']='home/navbar_view1';
        $data['content_page']='portfolio/v_portfolio';
        $data['main_footer']='home/footer_view1';

        $this->template->call_home_template($data);
    }
	


    function sendcomment()
    {
        
        $email = $this->input->post('useremail');
        $subject = $this->input->post('usersubject');
        $message = $this->input->post('usermessage');
        $sent = $this->home_model->send_comment($email, $subject, $message);

        return $sent;
   
    }


    function getAllRooms()
    {
        $catdropdown = '';
        $gallery = $this->home_model->get_all_rooms();
        //echo "<pre>";print_r($gallery);die();
        
        foreach ($gallery as $key => $value) {
            $catdropdown .= '<li><a href="';
            echo base_url();
            $catdropdown .= 'gallery/photogallery/'.$value['Room ID'].'">'.$value['Room Name'].'</a></li>'; 
        }
        //echo "<pre>";print_r($catdropdown);die();

        return $catdropdown;
    }

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */