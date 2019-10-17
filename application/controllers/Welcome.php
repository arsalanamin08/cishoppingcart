<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function category()
	{
		$this->load->view('header');
		$this->load->view('category');
		$this->load->view('footer');

	}
	public function singleproduct()
	{
		$this->load->view('header');
		$this->load->view('singleproduct');
		$this->load->view('footer');

	}
	public function checkout()
	{
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');

	}
	public function cart()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');

	}
	public function confirmation()
	{
		$this->load->view('header');
		$this->load->view('confirmation');
		$this->load->view('footer');

	}
	public function blog()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');

	}
	public function singleblog()
	{
		$this->load->view('header');
		$this->load->view('singleblog');
		$this->load->view('footer');

	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}
	public function tracking()
	{
		$this->load->view('header');
		$this->load->view('tracking');
		$this->load->view('footer');

	}
	public function elements()
	{
		$this->load->view('header');
		$this->load->view('elements');
		$this->load->view('footer');

	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');

	}
	public function add_product()
	{

		if ($this->input->post('submit'))
		{
			$this->load->model('product');
			$this->product->addValue();
			$this->load->view('header');
			$this->load->view('success_add_product');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('add_product');
			$this->load->view('footer');
		}
	}
}
