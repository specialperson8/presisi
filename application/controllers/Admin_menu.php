<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/index', $data);
            $this->load->view('template/admin_footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
            ];

            //insert tabel ke admin menu
            $this->db->insert('admin_menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Selamat, Data Menu Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/index');
        }
    }


    //fungsi hapus
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['admin_menu'] = $this->db->get_where('admin_menu', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $nama = $this->input->post('nama', true);
            $icon = $this->input->post('icon', true);
            $url  = $this->input->post('url', true);

            //setdata untuk diupdate

            $this->db->set('nama', $nama);
            $this->db->set('icon', $icon);
            $this->db->set('url', $url);
            $this->db->where('id', $this->input->post('id'));


            //insert tabel ke admin menu
            $this->db->update('admin_menu');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Menu Berhasil Di-Update!  </div>');
            redirect('admin_menu/index');
        }
    }


    //fungsi hapus
    public function hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('admin_menu', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data Menu Berhasil Di-Hapus!  </div>');
        redirect('admin_menu');
    }


    public function about()
    {
        $data['judul'] = 'Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('hb', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/about', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/about-grid';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Foto Karyawan Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/about');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $hb   = $this->input->post('hb', true);
                $motto   = $this->input->post('motto', true);
                $db   = $this->input->post('detail_bio', true);
            }

            $data = [
                'image' => $gambar,
                'hb' => $hb,
                'motto' => $motto,
                'detail_bio' => $db,

            ];

            //insert tabel ke admin menu
            $this->db->insert('about', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Selamat, Data Karyawan Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/about');
        }
    }


    public function edit_about($id)
    {
        $data['judul'] = 'Edit About';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['about'] = $this->db->get_where('about', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('hb', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_about', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $hb              = $this->input->post('hb');
            $motto              = $this->input->post('motto');
            $db              = $this->input->post('detail_bio');


            $gambar     = $_FILES['image'];

            if ($gambar) {

                $config['upload_path']      = './front-end/assets/img/about-grid/';
                $config['allowed_types']    = 'png|jpg|jpeg|gif';
                $config['max_size']         = 100000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['about']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'front-end/assets/img/about-grid/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setdata untuk diupdate

            $this->db->set('hb', $hb);
            $this->db->set('motto', $motto);
            $this->db->set('detail_bio', $db);


            $this->db->where('id', $this->input->post('id'));

            $this->db->update('about');

            //insert tabel ke admin menu

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data About Berhasil Di-Update!  </div>');
            redirect('admin_menu/about');
        }
    }

    public function hapus_about($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['about'] = $this->db->get_where('about', ['id' => $id])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('about', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data About Berhasil Di-Hapus!  </div>');
        redirect('admin_menu/about');
    }



    public function banner_image()
    {
        $data['judul'] = 'Banner Image';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('text', 'Text', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/banner_image', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/banner';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Gambar Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/banner_image');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $text   = $this->input->post('text', true);
            }

            $data = [
                'text' => $text,
                'image' => $gambar,

            ];

            //insert tabel ke admin menu
            $this->db->insert('banner_img', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Selamat, Data Banner Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/banner_image');
        }
    }

    public function produk()
    {
        $data['judul'] = 'Produk Presisi Printing';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['produk'] = $this->db->get_where('produk')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/produk', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/produk';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Foto Produk Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/produk');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $judul   = $this->input->post('judul', true);
            }

            $data = [
                'judul' => $judul,
                'image' => $gambar,

            ];

            //insert tabel ke admin menu
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Selamat, Data Produk Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/produk');
        }
    }

    public function karyawan()
    {
        $data['judul'] = 'Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('nm_kry', 'Nama Karyawan', 'required|trim');
        $this->form_validation->set_rules('wa', 'Nomor Whatsapp', 'required|trim');
        $this->form_validation->set_rules('fb', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('ig', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('jbt', 'Jabatan', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/karyawan', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/karyawan';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Foto Karyawan Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/karyawan');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $nm   = $this->input->post('nm_kry', true);
                $wa   = $this->input->post('wa', true);
                $fb   = $this->input->post('fb', true);
                $ig   = $this->input->post('ig', true);
                $jbt   = $this->input->post('jbt', true);
            }

            $data = [
                'nm_kry' => $nm,
                'image' => $gambar,
                'wa' => $wa,
                'fb' => $fb,
                'ig' => $ig,
                'jbt' => $jbt,

            ];

            //insert tabel ke admin menu
            $this->db->insert('karyawan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Selamat, Data Karyawan Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/karyawan');
        }
    }

    public function detail_karyawan($id)
    {

        $data['judul'] = 'Detail Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])
            ->row_array();

        $this->load->view('template/admin_header', $data);
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('template/admin_topbar', $data);
        $this->load->view('admin_menu/detail_karyawan', $data);
        $this->load->view('template/admin_footer', $data);
    }



    public function edit_karyawan($id)
    {
        $data['judul'] = 'Edit Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('nm_kry', 'Nama Karyawan', 'required|trim');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required|trim');
        $this->form_validation->set_rules('fb', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('ig', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('jbt', 'Jabatan', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_karyawan', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $nm         = $this->input->post('nm_kry');
            $wa         = $this->input->post('wa');
            $fb         = $this->input->post('fb');
            $ig         = $this->input->post('ig');
            $jbt        = $this->input->post('jbt');

            $gambar     = $_FILES['image'];

            if ($gambar) {

                $config['upload_path']      = './front-end/assets/img/karyawan/';
                $config['allowed_types']    = 'png|jpg|jpeg|gif';
                $config['max_size']         = 100000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['karyawan']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'front-end/assets/img/karyawan/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setdata untuk diupdate

            $this->db->set('nm_kry', $nm);
            $this->db->set('wa', $wa);
            $this->db->set('fb', $fb);
            $this->db->set('ig', $ig);
            $this->db->set('jbt', $jbt);

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('karyawan');

            //insert tabel ke admin menu

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Karyawan Berhasil Di-Update!  </div>');
            redirect('admin_menu/karyawan');
        }
    }


    public function hapus_karyawan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('karyawan', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data Karyawan Berhasil Di-Hapus!  </div>');
        redirect('admin_menu/karyawan');
    }

    public function blog()
    {
        $data['judul'] = 'Blog';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/blog', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/blog';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Foto Blog Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/blog');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $judul   = $this->input->post('judul', true);
                $slug   = $this->input->post('slug', true);
                $isi_blog   = $this->input->post('isi_blog', true);
                $created_by   = $this->input->post('created_by', true);
            }

            $data = [
                'judul'  => $judul,
                'image'  => $gambar,
                'slug'     => $slug,
                'isi_blog'     => $isi_blog,
                'created_by'     => $created_by,
                'created_at'     => time(),
            ];

            //insert tabel ke admin menu
            $this->db->insert('blog', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Blog Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/blog');
        }
    }

    public function edit_blog($id)
    {
        $data['judul'] = 'Edit Blog';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['blog'] = $this->db->get_where('blog', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');
        $this->form_validation->set_rules('created_at', 'Created At', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_blog', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $judul              = $this->input->post('judul');
            $slug               = $this->input->post('slug');
            $isi_blog           = $this->input->post('isi_blog');
            $created_by         = $this->input->post('created_by');
            $created_at         = $this->input->post('created_at');

            $gambar     = $_FILES['image'];

            if ($gambar) {

                $config['upload_path']      = './front-end/assets/img/blog/';
                $config['allowed_types']    = 'png|jpg|jpeg|gif';
                $config['max_size']         = 100000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['blog']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'front-end/assets/img/blog/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setdata untuk diupdate

            $this->db->set('judul', $judul);
            $this->db->set('slug', $slug);
            $this->db->set('isi_blog', $isi_blog);
            $this->db->set('created_by', $created_by);
            $this->db->set('created_at', $created_at);

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('blog');

            //insert tabel ke admin menu

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Blog Berhasil Di-Update!  </div>');
            redirect('admin_menu/blog');
        }
    }

    public function hapus_blog($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['blog'] = $this->db->get_where('blog', ['id' => $id])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('blog', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data Blog Berhasil Di-Hapus!  </div>');
        redirect('admin_menu/blog');
    }

    public function detail_blog($id)
    {

        $data['judul'] = 'Detail Blog';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['blog'] = $this->db->get_where('blog', ['id' => $id])
            ->row_array();

        $this->load->view('template/admin_header', $data);
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('template/admin_topbar', $data);
        $this->load->view('admin_menu/detail_blog', $data);
        $this->load->view('template/admin_footer', $data);
    }

    public function edit_banner($id)
    {
        $data['judul'] = 'Edit Banner';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['banner_img'] = $this->db->get_where('banner_img', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('text', 'Judul Text', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_banner', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $text              = $this->input->post('text');


            $gambar     = $_FILES['image'];

            if ($gambar) {

                $config['upload_path']      = './front-end/assets/img/banner/';
                $config['allowed_types']    = 'png|jpg|jpeg|gif';
                $config['max_size']         = 100000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['banner_image']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'front-end/assets/img/banner/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setdata untuk diupdate

            $this->db->set('text', $text);


            $this->db->where('id', $this->input->post('id'));

            $this->db->update('banner_img');

            //insert tabel ke admin menu

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Banner Berhasil Di-Update!  </div>');
            redirect('admin_menu/banner_image');
        }
    }

    public function hapus_banner($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['banner_image'] = $this->db->get_where('banner_image', ['id' => $id])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('banner_image', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data Banner Berhasil Di-Hapus!  </div>');
        redirect('admin_menu/banner_image');
    }

    public function contact()
    {
        $data['judul'] = 'Contact';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        //query tabel(ambil data dari db)
        $data['contact'] = $this->db->get_where('contact')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


        //set rules
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required|trim');
        $this->form_validation->set_rules('ig', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('yt', 'Youtube', 'required|trim');
        $this->form_validation->set_rules('fb', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('maps', 'Maps', 'required|trim');

        if ($this->form_validation->run() == false) {



            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/contact', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/contact';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                 Foto Blog Anda Belum Di-Upload!  </div>');
                redirect('admin_menu/contact');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $alamat   = $this->input->post('alamat', true);
                $email   = $this->input->post('email', true);
                $wa   = $this->input->post('wa', true);
                $ig   = $this->input->post('ig', true);
                $yt   = $this->input->post('yt', true);
                $fb   = $this->input->post('fb', true);
                $maps   = $this->input->post('maps', true);
            }

            $data = [
                'image'  => $gambar,
                'alamat'  => $alamat,
                'email'  => $email,
                'wa'     => $wa,
                'ig'     => $ig,
                'yt'     => $yt,
                'fb'     => $fb,
                'maps'     => $maps,
            ];

            //insert tabel ke admin menu
            $this->db->insert('contact', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Contact Berhasil Ditambahkan!  </div>');
            redirect('admin_menu/contact');
        }
    }

    public function edit_contact($id)
    {
        $data['judul'] = 'Edit Contact';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['contact'] = $this->db->get_where('contact', ['id' => $id])
            ->row_array();


        //set rules untuk edit menu
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('wa', 'Whatsapp', 'required|trim');
        $this->form_validation->set_rules('ig', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('yt', 'Youtube', 'required|trim');
        $this->form_validation->set_rules('fb', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('maps', 'Maps', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            //  $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_contact', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $alamat         = $this->input->post('alamat');
            $email         = $this->input->post('email');
            $wa         = $this->input->post('wa');
            $ig         = $this->input->post('ig');
            $yt        = $this->input->post('yt');
            $fb        = $this->input->post('fb');
            $maps        = $this->input->post('maps');

            $gambar     = $_FILES['image'];

            if ($gambar) {

                $config['upload_path']      = './front-end/assets/img/contact/';
                $config['allowed_types']    = 'png|jpg|jpeg|gif';
                $config['max_size']         = 100000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['contact']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'front-end/assets/img/contact/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //setdata untuk diupdate

            $this->db->set('alamat', $alamat);
            $this->db->set('email', $email);
            $this->db->set('wa', $wa);
            $this->db->set('ig', $ig);
            $this->db->set('yt', $yt);
            $this->db->set('fb', $fb);
            $this->db->set('maps', $maps);

            $this->db->where('id', $this->input->post('id'));

            $this->db->update('contact');

            //insert tabel ke admin menu

            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Contact Berhasil Di-Update!  </div>');
            redirect('admin_menu/contact');
        }
    }


    public function hapus_contact($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
            ->row_array();

        $data['contact'] = $this->db->get_where('contact', ['id' => $id])
            ->row_array();

        // hapus data untuk di admin menu
        $this->db->delete('contact', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data Contact Berhasil Di-Hapus!  </div>');
        redirect('admin_menu/contact');
    }
}
