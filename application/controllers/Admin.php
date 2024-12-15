<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
	public $log;
	public $utf8;
	public $uri;
	public $router;
	public $exceptions;
	public $output;
	public $security;
	public $input;
	public $lang;
	public $hooks;
	public $benchmark;
	public $db; // Declare the property
	public $modeldata;
	public $modeldataval;
	public $upload;
	public $session; // Declare this property





	public $config; // Declare the config property

	public function _construct()
	{
		parent::__construct(); // Call the parent constructor if needed
		$this->config = []; // Initialize config
		$this->load->library('upload', 'form');

		$this->upload = $this->upload;

		$this->modeldata = $this->load->model('modeldata');


	}

// login page valid and show
	public function index()	
	{
		if ($this->input->method() == 'post') {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data['valid'] = $this->modeldata->passwordvalid($username, $password);


			if ($data['valid'] != false) {

				$data['content'] = 'admin/homeadmin';
				$data['slide'] = $this->modeldata->homeinsertshow();



				$this->session->set_userdata('name', $username);
				$this->load->view('admin/main', $data);

			} else {
				$data['passval'] = "Your username or password are incorrect";
				$this->load->view('admin/login', $data);
			}

		} else {
			
			$this->load->helper('url');
		    
		    $this->load->view('admin/login');
		}

		
	}


	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
	



	public function do_upload()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('slide1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$error = null;
		} else {
			$error = $this->upload->display_error();
			$data = null;
		}
		$s = 1;
		$data = array(
			'slide' => $img1,
			'status' => $s,

		);

		$stat = $this->modeldata->insertvalue($data);
		if ($stat == true) {
			redirect('admin/table');
			$this->load->view('table', $data);
		}
	}
	public function updatestatusf()
	{
		$id = $this->input->get('id');
		$status = $this->input->get('status');
		$tname = $this->input->get('tname');

		$slideupdate = $this->modeldata->updateshowstatus($id, $status, $tname);

		if ($slideupdate == true) {
			if ($tname == 'slide') {
				redirect('admin/table');
			} elseif ($tname == 'brand') {
				redirect('admin/brand');
			} elseif ($tname == 'gallery') {
				redirect('admin/gallery');
			}

		}



	}
	public function slidedelete()
	{
		$id = $this->input->get('id');
		$image = $this->input->get('slide');
		$tname = $this->input->get('tname');

		$file_path = './uploads/' . $image; // Adjust the folder path

		// Check if the file exists before deleting
		if (file_exists($file_path)) {
			if (unlink($file_path)) {
				// Delete the database record
				if ($this->modeldata->deleteslidemodel($id, $tname) == true) {
					if ($tname == 'slide') {
						redirect('admin/table');
					} elseif ($tname == 'brand') {
						redirect('admin/brand');
					} elseif ($tname == 'gallery') {
						redirect('admin/gallery');
					} elseif ($tname == 'services') {
						redirect('admin/services');
					} elseif ($tname == 'support') {
						redirect('admin/aboutus');
					} elseif ($tname == 'apply') {
						redirect('admin/apply');
					} elseif ($tname == 'engineers') {
						redirect('admin/engineer');
					}
				} else {
					echo "Image deleted, but failed to delete database record.";

				}
			} else {
				echo "Failed to delete the image file.";
			}
		} else {
			echo "File does not exist.";
		}



	}
	public function updateslide1()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upslide1')) {

			$i = $this->input->post('value');
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$error = null;
		} else {
			$error = $this->upload->display_error();
			$data = null;
		}

		// Prepare the data to update
		$data = array(

			'slide' => $img1,
		);
		$set = $this->modeldata->updateslideone($i, $data);

		if ($set == true) {
			redirect('admin/table');
		}

		// Update the last row


	}


	public function slideshowupdate()
	{
		$data['content'] = 'admin/slideshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function serviceinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('serviceimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$ser1 = $this->input->post('servicetext1');
			$error = null;
		} else {
			$error = $this->upload->display_error();
		}


		$data = array(
			'image' => $img1,
			'content' => $ser1,




		);
		$status = $this->modeldata->servicein($data);
		if ($status = true) {
			redirect('admin/services');


		}
	}
	public function serviceshowupdate()
	{

		$data['content'] = 'admin/serviceshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function serviceupdate1()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		$this->upload->do_upload('serviceupdateimg1');
		$i = $this->input->post('value');
		$img1_data = $this->upload->data();
		$img1 = $img1_data['file_name'];
		$ser1 = $this->input->post('serviceupdatetext1');


		if ($img1 and $ser1) {
			$data = array(

				'image' => $img1,
				'content' => $ser1,
			);
		} elseif ($img1) {
			$data = array(
				'image' => $img1,
			);
		} elseif ($ser1) {
			$data = array(
				'content' => $ser1,
			);
		}






		// Prepare the data to update


		// Update the last row
		if ($this->modeldata->serviceupdate($i, $data)) {
			redirect('admin/services');
		} else {
			echo "Failed to update the last row.";
		}

	}

	public function supportupdate()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		$this->upload->do_upload('supportupdateimg');
		$img1_data = $this->upload->data();
		$img1 = $img1_data['file_name'];
		$i = $this->input->post('valu');
		$con = $this->input->post('supportupdatetext');



		if ($img1 and $con) {
			$data = array(
				'img' => $img1,
				'content' => $con,
			);


		} elseif ($con) {
			$data = array(

				'content' => $con,
			);
		} elseif ($img1) {
			$data = array(
				'img' => $img1,
			);
		} else {
			echo "Failed to update the last row.";
		}



		if ($this->modeldata->supportupdatetb($i, $data)) {
			redirect('admin/aboutus');
		}
		// Update the last row


	}

	public function aboutshowupdate()
	{
		$data['content'] = 'admin/aboutshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function brandinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('brandimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$error = null;
		} else {
			$error = $this->upload->display_error();

		}

		$data = array(
			'img' => $img1,
			'status' => 1,
		);
		$status = $this->modeldata->brandin($data);
		if ($status = true) {
			redirect('admin/brand');


		}
	}

	public function brandupdate1()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('brandupdateimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$id = $this->input->post('value');


			$error = null;
		} else {
			$error = $this->upload->display_error();

		}

		// Prepare the data to update
		$data = array(

			'img' => $img1,

		);

		// Update the last row

		if ($this->modeldata->brandupdate($id, $data)) {
			redirect('admin/brand');
		} else {
			echo "Failed to update the last row.";
		}

	}

	public function brandshownew()
	{
		$data['content'] = 'admin/brandshownew';

		$this->load->view('admin/main', $data);
	}

	public function brandshowupdate()
	{
		$data['content'] = 'admin/brandshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function galleryshownew()
	{
		$data['content'] = 'admin/galleryshownew';

		$this->load->view('admin/main', $data);
	}
	public function galleryinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('galleryimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];

			$error = null;
		} else {
			$error = $this->upload->display_error();

		}


		$data = array(
			'img' => $img1,
			'status' => 1,



		);
		$status = $this->modeldata->galleryin($data);
		if ($status = true) {
			redirect('admin/gallery');


		}
	}

	public function galleryshowupdate()
	{
		$data['content'] = 'admin/galleryshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function galleryupdate1()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		$id = $this->input->post('value');
		if ($this->upload->do_upload('galleryupdateimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];

			$error = null;
		} else {
			$error = $this->upload->display_error();

		}



		// Prepare the data to update
		$data = array(
			'id' => $id,
			'img' => $img1,

		);

		// Update the last row
		if ($this->modeldata->galleryupdate($data)) {
			redirect('admin/gallery');
		} else {
			echo "Failed to update the last row.";
		}

	}

	public function applyshowupdate()
	{
		$data['content'] = 'admin/applyshowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function applyupdatecon()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		$id = $this->input->post('value');
		$con = $this->input->post('applyupdatetext');
		$this->upload->do_upload('applyupdateimg');
		$img_data = $this->upload->data();
		$img = $img_data['file_name'];



		// Prepare the data to update
		if ($img and $con) {
			$data = array(

				'img' => $img,
				'content' => $con,

			);
		} elseif ($img) {
			$data = array(

				'img' => $img,

			);
		} elseif ($con) {
			$data = array(

				'content' => $con,

			);
		}

		// Update the last row
		if ($this->modeldata->applyupdate($id, $data)) {
			redirect('admin/apply');
		} else {
			echo "Failed to update the last row.";
		}

	}

	public function engineersinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('engineerimg1')) {
			$img1_data = $this->upload->data();
			$img1 = $img1_data['file_name'];
			$tit1 = $this->input->post('engineertit1');
			$con1 = $this->input->post('engineercon1');
			$error = null;
		} else {
			$error = $this->upload->display_error();

		}

		$data = array(
			'img' => $img1,
			'title' => $tit1,
			'content' => $con1,




		);
		$status = $this->modeldata->engineersin($data);
		if ($status = true) {
			redirect('admin/engineer');


		}
	}

	public function engineershowupdate()
	{
		$data['content'] = 'admin/engineershowupdate';
		$data['id'] = $this->input->get('id');
		$this->load->view('admin/main', $data);
	}

	public function engineersupdate1()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		$this->upload->do_upload('engineerupdateimg1');
		$img1_data = $this->upload->data();
		$img1 = $img1_data['file_name'];
		$tit1 = $this->input->post('engineerupdatetit1');
		$con1 = $this->input->post('engineerupdatecon1');
		$id = $this->input->post('value');





		// Prepare the data to update
		if ($img1 and $tit1 and $con1) {
			$data = array(
				'img' => $img1,
				'tittle' => $tit1,
				'content' => $con1

			);
		} elseif ($img1) {
			$data = array(
				'img' => $img1,

			);
		} elseif ($tit1) {
			$data = array(

				'title' => $tit1,

			);
		} elseif ($con1) {
			$data = array(

				'content' => $con1,

			);
		}


		// Update the last row
		if ($this->modeldata->engineerupdate($id, $data)) {
			redirect('admin/engineer');
		} else {
			echo "Failed to update the last row.";
		}

	}




	// endddddddddddddddddd

	public function supportinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('support1')) {
			$img_data = $this->upload->data();
			$img = $img_data['file_name'];
			$ser = $this->input->post('supporttext');
			$error = null;
		} else {
			$error = $this->upload->display_error();

		}
		$data = array(
			'img' => $img,
			'content' => $ser,
		);
		$status = $this->modeldata->supportin($data);
		if ($status = true) {
			redirect('admin/aboutus');


		}

	}


	public function applyinsert()
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = 50000;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('apply1')) {
			$img_data = $this->upload->data();
			$img = $img_data['file_name'];
			$ser = $this->input->post('applytext');
			$error = null;
		} else {
			$error = $this->upload->display_error();

		}
		$data = array(
			'img' => $img,
			'content' => $ser,




		);
		$status = $this->modeldata->applyin($data);
		if ($status = true) {
			redirect('admin/apply');


		}

	}






	public function table()
	{
		$data['content'] = 'admin/homeadmin';
		$data['slide'] = $this->modeldata->homeinsertshow();
		$this->load->view('admin/main', $data);
	}
	public function slideshownew()
	{
		$data['content'] = 'admin/slideshownew';

		$this->load->view('admin/main', $data);
	}

	public function aboutus()
	{
		$data['content'] = 'admin/aboutus';
		$data['about'] = $this->modeldata->aboutinsertshow();
		$this->load->view('admin/main', $data);
	}
	public function aboutshownew()
	{
		$data['content'] = 'admin/aboutshownew';

		$this->load->view('admin/main', $data);
	}



	public function services()
	{
		$data['content'] = 'admin/services';
		$data['services'] = $this->modeldata->servicesinsertshow();
		$this->load->view('admin/main', $data);
	}
	public function serviceshownew()
	{
		$data['content'] = 'admin/serviceshownew';

		$this->load->view('admin/main', $data);
	}
	public function gallery()
	{
		$data['content'] = 'admin/gallery';
		$data['gallery'] = $this->modeldata->galleryinsertshow();
		$this->load->view('admin/main', $data);
	}


	public function apply()
	{
		$data['content'] = 'admin/apply';
		$data['apply'] = $this->modeldata->applyinsertshow();
		$this->load->view('admin/main', $data);
	}
	public function applyshownew()
	{
		$data['content'] = 'admin/applyshownew';

		$this->load->view('admin/main', $data);
	}

	public function engineer()
	{
		$data['content'] = 'admin/engineer';
		$data['engineer'] = $this->modeldata->engineerinsertshow();
		$this->load->view('admin/main', $data);
	}
	public function engineershownew()
	{
		$data['content'] = 'admin/engineershownew';

		$this->load->view('admin/main', $data);
	}

	public function brand()
	{
		$data['content'] = 'admin/brand';
		$data['brand'] = $this->modeldata->brandinsertshow();
		$this->load->view('admin/main', $data);
	}







}