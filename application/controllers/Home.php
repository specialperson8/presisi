<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        //query tabel(ambil data dari db)
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();


        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function about()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/about', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function portfolio()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();


        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/portfolio', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function team()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/portfolio', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function myAccount()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/myAccount', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function signIn()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/signIn', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function login()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/login');
        $this->load->view('template/home_footer');
    }

    public function blog()
    {

        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();


        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/blog', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function blog_detail($slug)
    {
        $data['judul'] = 'Detail Blog';

        $data['blog'] = $this->db->get_where('blog', ['slug' => $slug])->row_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/blog_detail', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function contact()
    {
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['contact'] = $this->db->get_where('contact')->result_array();


        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/contact');
        $this->load->view('template/home_footer', $data);
    }
}
