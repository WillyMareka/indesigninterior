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
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/v_home';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }


    function services()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/services';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

    function about()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/about';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }



    function contact()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';

        $this->template->call_template($data);
    } 
        

    function portfolio(){
        $data['']='';
        $data['top_navbar1']='home/navbar_view1';
        $data['content_page']='portfolio/v_portfolio';
        $data['main_footer']='home/footer_view1';

        $this->template->call_template($data);
    }

    // function photo(){
    //     $data='';
    //     $data['top_navbar1']="home/navbar_view1";
    //     $data['content_page']='photo/v_photo';
    //     $data['main_footer']='home/footer_view1';

    //     $this->template->call_template($data);
    // }
	


    function sendcomment()
    {
        
        $email = $this->input->post('useremail');
        $subject = $this->input->post('usersubject');
        $message = $this->input->post('usermessage');
        $sent = $this->home_model->send_comment($email, $subject, $message);

        return $sent;
   
    }


    // function all_estate_combo()
    // {
    //     $estates = $this->estate_model->get_all_estates();
    //     // echo "<pre>";print_r($estates);die();
    //     $this->estates_combo .= '<select name="table_search_estate" id="table_search_estate" onchange="get_estate()" class="form-control input-sm js-example-placeholder-single pull-right" style="width: 350px;">';
    //     $this->estates_combo .= '<option value="0" selected>Select: Estate Name</option>';
    //     foreach ($estates as $key => $value) {
    //         $this->estates_combo .= '<option value="'.$value['Estate ID'].'">'.$value['Estate Name'].'</option>';
    //     }
    //     $this->estates_combo .= '</select>';

    //     return $this->estates_combo;
    // }

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */