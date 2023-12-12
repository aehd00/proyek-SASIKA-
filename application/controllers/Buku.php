<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['buku'] = $this->Madmin->get_all_data('tbl_buku')->result();
        // $this->load->view('admin/_partial/header');
        // $this->load->view('admin/_partial/sidebar');
        // $this->load->view('admin/_partial/topnav');
        $this->load->view('admin/buku/tampil', $data);
        // $this->load->view('admin/_partial/footer');
    }

    public function add()
    {
        // if(empty($this->session->userdata('userName'))){
        // 	redirect('adminpanel');
        // }
        // $this->load->view('admin/layout/header');
        // $this->load->view('admin/layout/menu');
        $this->load->view('admin/buku/formAddBuku');
        // $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $dataWhere = array('id_buku' => $id);
        $data['buku'] = $this->Madmin->get_by_id('tbl_buku', $dataWhere)->row_object();
        $this->load->view('admin/buku/formEditBuku', $data);
    }

    public function save()
    {

        $nama_buku = $this->input->post('nama_buku');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $tanggal_post = $this->input->post('tanggal_post');
        $config['upload_path'] = './assets/foto_buku/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_buku')) {
            $data_file = $this->upload->data();

            $data_insert = array(
                'nama_buku' => $nama_buku,
                'harga' => $harga,
                'stok' => $stok,
                'tanggal_post' => $tanggal_post,
                'foto_buku' =>  $data_file['file_name']

            );

            $this->Madmin->insert('tbl_buku', $data_insert);
            redirect('buku');
        } else {
            // uncomment ini kalo ada error lagi
            // echo json_encode($this->upload->display_errors());
            // exit;
            redirect('buku/add');
        }
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $nama_buku = $this->input->post('nama_buku');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $tanggal_post = $this->input->post('tanggal_post');

        $data_file = null;
        $config['upload_path'] = './assets/foto_buku/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);


        $dataUpdate = array(
            'nama_buku' => $nama_buku,
            'harga' => $harga,
            'stok' => $stok,
            'tanggal_post' => $tanggal_post
        );

        if ($_FILES['foto_buku']['name'] != '') {
            if ($this->upload->do_upload('foto_buku')) {
                $data_file = $this->upload->data();
                $dataUpdate['foto_buku'] = $data_file['file_name'];
            }
        }

        $this->Madmin->update('tbl_buku', $dataUpdate, 'id_buku', $id_buku);
        redirect('buku');
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_buku', 'id_buku', $id);
        redirect('buku');
    }
}
