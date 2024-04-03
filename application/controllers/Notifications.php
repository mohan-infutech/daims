<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Your_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Notification_model', 'nm');
    }

    public function index() {
        $notifications = $this->Notification_model->get_notifications();
        
        $data['notifications'] = $notifications;
        
        $this->load->view('index', $data);
    }

    // Add more controller methods as needed

}
