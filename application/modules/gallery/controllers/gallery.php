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
        $data['dropcategories'] = $this->getAllRooms();
        $data['top_navbar1'] = 'home/navbar_view1';
        // $data['content_page'] = 'home/contacts';
        $data['main_footer'] = 'home/footer_view1';
        
        
        $this->template->call_template($data);
    }

    // function photogallery(categoryid){
    //     $data['dropcategories'] = $this->getAllRooms();
    //     $data['top_navbar1'] = 'home/navbar_view1';
    //     // $data['content_page'] = 'home/contacts';
    //     $data['main_footer'] = 'home/footer_view1';
        
        
    //     $this->template->call_template($data);
    // }

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