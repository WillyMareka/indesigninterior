<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        
        $this->load->model('gallery/gallery_model');
        
        parent::__construct();
          
    }


    function index()
    {
        $data[''] = '';
        $data['top_navbar1'] = 'home/navbar_view1';
        $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

    // function getAllRooms()
    // {
        

    //     $catdropdown = '';
    //     $gallery = $this->gallery_model->get_all_rooms();
    //     // echo "<pre>";print_r($estates);die();
    //     $catdropdown .= '<li><a href="'echo base_url().'gallery/"></a></li>';
    //     $catdropdown .= '<option value="0" selected>Select: Estate Name</option>';
    //     foreach ($estates as $key => $value) {
    //         $catdropdown .= '<option value="'.$value['Estate ID'].'">'.$value['Estate Name'].'</option>';
    //     }
    //     $catdropdown .= '</li>';

    //     return $catdropdown;
    // }


    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */