<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administration_model', 'admin_model');
    }

    public function index()
    {
        // Check if user is logged in
        if ($this->session->has_userdata('name')) {
            $data['page'] = 'Administration';
            $data['admins'] = $this->admin_model->all();
            $this->load->view('administration', $data); // Load your view file 'administration.php'
        } else {
            redirect('logout');
        }
    }

    public function create()
    {
        // Check if user is logged in
        if ($this->session->has_userdata('name')) {
            // Handle form submission for adding a new administrator
            if ($this->input->method() == 'post') {
                $admin_data = array(
                    // Get form data from POST request
                    'name' => $this->input->post('name'),
                    'designation' => $this->input->post('designation'),
                    // Add more fields as needed
                );

                // Call model function to insert data into database
                $result = $this->admin_model->new($admin_data);

                if ($result) {
                    // Set success message
                    $this->session->set_flashdata('success', 'Administrator added successfully!');
                } else {
                    // Set error message
                    $this->session->set_flashdata('error', 'Failed to add administrator!');
                }

                // Redirect to the same page
                redirect('administration');
            } else {
                // Load your create view file
                $this->load->view('create_administrator');
            }
        } else {
            redirect('logout');
        }
    }

    public function delete($id = '')
    {
        // Check if user is logged in
        if ($this->session->has_userdata('name')) {
            // Call model function to delete administrator by ID
            $result = $this->admin_model->delete($id);

            if ($result) {
                // Set success message
                $this->session->set_flashdata('success', 'Administrator deleted successfully!');
            } else {
                // Set error message
                $this->session->set_flashdata('error', 'Failed to delete administrator!');
            }

            // Redirect to the same page
            redirect('administration');
        } else {
            redirect('logout');
        }
    }

    // Add more methods as needed for editing, updating, etc.
}

