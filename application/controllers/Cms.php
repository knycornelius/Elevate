<?php

class Cms extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('CmsModel');
		$this->load->library('form_validation');
    }
    
    public function index () {
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        if(!isset($_GET['category'])) {
            $this->load->view('pages/backend/cms', $data);
        } else {
            $data['output'] = $this->CmsModel->getData($_GET['category']);
            $this->load->view('pages/backend/cms__edit', $data);
        }
    }

    public function ShowDetail () {
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['output'] = $this->CmsModel->getDetail($_GET['category'], $_GET['id']);
        $this->load->view('pages/backend/cms__detail', $data);
    }

    public function addPage() {
        $data['sub1'] = $this->CmsModel->getSub("sc_name", $_GET['category']);
        $data['sub2'] = $this->CmsModel->getSub("sc_name2", $_GET['category']);
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $this->load->view('pages/backend/cms__add', $data);
    }

    public function add($id) {

        $link1 = $_FILES['Image1']['name'];
        $link2 = $_FILES['Image2']['name'];
        $link3 = $_FILES['Image3']['name'];
        $sc1 = strtoupper(substr($this->input->post('Sc1'),0,1));
        $cat = strtoupper(substr($id, 0, 1));
        $itemid = $this->CmsModel->getLastID($cat, $sc1, $id);
        $values = array(
            'id_item' => $itemid,
            'item_name' => $this->input->post('Name'),
            'image1' => $link1,
            'image2' => $link2,
            'image3' => $link3,
            'stock' => $this->input->post('Stock'),
            'price' => $this->input->post('Price'),
            'discount' => $this->input->post('Discount'),
            'disc_sd' => $this->input->post('DiscSd'),
            'disc_ed' => $this->input->post('DiscEd'),
            'sc1' => $this->input->post('Sc1'),
            'sc2' => $this->input->post('Sc2')
        );

        $category = $id;

        $config['upload_path'] = './assets/images/e_'.$category;
		$config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 4096;
        
        $this->load->library('upload', $config);

		$this->upload->do_upload('Image1');
		$this->upload->do_upload('Image2');
        $this->upload->do_upload('Image3');
        
        $this->CmsModel->add($category, $values);
        redirect('http://localhost/elevate/index.php/cms?category='. $category);
    }

    public function updatePage($param) {
        $data['output'] = $this->CmsModel->getDetail($_GET['category'], $param);
        $data['sub1'] = $this->CmsModel->getSub("sc_name", $_GET['category']);
        $data['sub2'] = $this->CmsModel->getSub("sc_name2", $_GET['category']);
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $this->load->view('pages/backend/cms__update', $data);
    }

    public function update($id) {
        $category = $_GET['category'];
        $link1 = ($_FILES['Image1']['name']) ? $_FILES['Image1']['name'] : $this->CmsModel->getCustom("image1", $category, $id);
        $link2 = ($_FILES['Image2']['name']) ? $_FILES['Image2']['name'] : $this->CmsModel->getCustom("image2", $category, $id);
        $link3 = ($_FILES['Image3']['name']) ? $_FILES['Image3']['name'] : $this->CmsModel->getCustom("image3", $category, $id);
        
        $values = array(
            'id_item' => $id,
            'item_name' => $this->input->post('Name'),
            'image1' => $link1,
            'image2' => $link2,
            'image3' => $link3,
            'stock' => $this->input->post('Stock'),
            'price' => $this->input->post('Price'),
            'discount' => $this->input->post('Discount'),
            'disc_sd' => $this->input->post('DiscSd'),
            'disc_ed' => $this->input->post('DiscEd'),
            'sc1' => $this->input->post('Sc1'),
            'sc2' => $this->input->post('Sc2')
        );

        $config['upload_path'] = './assets/images/e_'.$category;
		$config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 4096;
        
        $this->load->library('upload', $config);

        if($_FILES['Image1']['name']) $this->upload->do_upload('Image1');
		if($_FILES['Image2']['name']) $this->upload->do_upload('Image2');
        if($_FILES['Image3']['name']) $this->upload->do_upload('Image3');

        $this->CmsModel->update($category, $values);
        redirect('http://localhost/elevate/index.php/cms?category='. $category);
    }
    
    public function delete($param) {
        $this->CmsModel->delete($_GET['category'], $param);
        redirect('http://localhost/elevate/index.php/cms?category='. $_GET['category']);
    }
}