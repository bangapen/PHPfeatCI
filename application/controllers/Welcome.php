<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// 1. fetch from db via model
		// 2. store returned data(array) in var
		// 3. pass the stored data with view 
		$this->load->model('queries');
		$posts = $this->queries->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}


	public function create(){
		$this->load->view('create');
	}

	public function update($id){
		$this->load->model('queries');
		$post = $this->queries->getThisPost($id);
		$this->load->view('update', ['post'=>$post]);
	}

	public function view($id){
		$this->load->model('queries');
		$post = $this->queries->getThisPost($id);
		$this->load->view('view', ['post'=>$post]);
	}


	public function delete($id){
		$this->load->model('queries');
		if($this->queries->deleteThisPost($id)){
				$this->session->set_flashdata('msg', 'Post deleted successfully');
			}else{
				$this->session->set_flashdata('msg', 'failed to delete post');
			}
			redirect('welcome');
	}


	public function addPost(){

		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[10]|max_length[1000]');

		if($this->form_validation->run()){
			$data = $this->input->post();
			$data['date_created'] = date('Y-m-d');
			// rid of entra submit:submit b4 passing $data
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->add_post($data)){
				$this->session->set_flashdata('msg', 'Post uploaded successfully');
			}else{
				$this->session->set_flashdata('msg', 'failed to upload post');
			}
			redirect('welcome');


		}else{
			// redirect to same page
			$this->load->view('create');
		}
	}

	public function updatePost($id){

		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[10]|max_length[1000]');

		if($this->form_validation->run()){
			$data = $this->input->post();
			$data['date_created'] = date('Y-m-d');
			// rid of entra submit:submit b4 passing $data
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->update_post($id, $data)){
				$this->session->set_flashdata('msg', 'Post updated successfully');
			}else{
				$this->session->set_flashdata('msg', 'failed to update post');
			}
			redirect('welcome');


		}else{
			// redirect to same page
			$this->load->view('update');
		}
	}
}