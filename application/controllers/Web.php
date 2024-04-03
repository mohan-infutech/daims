<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model', 'gm');
        $this->load->model('Notification_model', 'nm');
        $this->load->model('Administration_model', 'admin_model');

	}

	public function index($value='')
	{
		$data['notifications'] = $this->nm->fetch();
		$this->load->view('index', $data);
	}

	public function about($value='')
	{
		$this->load->view('about');
	}

	public function contact($value='')
	{
		$this->load->view('contact');
	}

	public function placementPartners($value='')
	{
		$this->load->view('placement');
	}

	public function news($value='')
	{	
		$data['notifications'] = $this->nm->fetch();
		$this->load->view('news');
	}

	public function gallery($value='')
	{
		$page_num = ($this->uri->segment(2) == 0) ? 1 : $this->uri->segment(2);
		$pgc['base_url'] = base_url('gallery');
		$pgc['total_rows'] = $this->gm->count();
		$pgc['per_page'] = 4;
		$pgc['use_page_numbers'] = TRUE;
		$pgc['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$pgc['full_tag_close'] = '</ul class="page-numbers">';
		$pgc['first_link'] = '&laquo;';
		$pgc['first_tag_open'] = '<li class="page-item">';
		$pgc['first_tag_close'] = '</li>';
		$pgc['last_link'] = '&raquo;';
		$pgc['last_tag_open'] = '<li class="page-item">';
		$pgc['last_tag_close'] = '</li>';
		$pgc['next_link'] = '&gt;';
		$pgc['next_tag_open'] = '<li class="prev page-numbers">';
		$pgc['next_tag_close'] = '</li class="next page-numbers">';
		$pgc['prev_link'] = '&lt;';
		$pgc['prev_tag_open'] = '<li class="page-item">';
		$pgc['prev_tag_close'] = '</li>';
		$pgc['cur_tag_open'] = '<li class="page-numbers current"><span class="page-link">';
		$pgc['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$pgc['num_tag_open'] = '<li class="page-item">';
		$pgc['num_tag_close'] = '</li>';
		$pgc['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($pgc);

		$data['gallery'] = TRUE;
		$data['page'] = 'Gallery';
		$data['pictures'] = $this->gm->fetch($pgc['per_page'], $page_num);
		$data['pages'] = $this->pagination->create_links();
		$this->load->view('gallery', $data);
	}



	public function administration($value='')
	{
		$data['type'] = $this->admin_model->fetchTypes();
		$data['admins'] = $this->admin_model->fetch();
		$this->load->view('administration', $data);
	}

	public function departments($value='')
	{
		$this->load->view('departments');
	}

	public function laboratories($value='')
	{
		$this->load->view('laboratories');
	}

	public function internshipProject($value='')
	{
		$this->load->view('internship-project');
	}

	public function nutritionNursing($value='')
	{
		$this->load->view('nutrition-nursing');
	}

	public function midwiferyNursing($value='')
	{
		$this->load->view('midwifery-nursing');
	}

	public function computer($value='')
	{
		$this->load->view('computer');
	}

	public function syllabus($value='')
	{
		$this->load->view('syllabus');
	}

	public function childHealth($value='')
	{
		$this->load->view('child-health');
	}

	public function admission($value='')
	{
		$this->load->view('admission');
	}

	
}
