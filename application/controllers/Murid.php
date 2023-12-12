<?php
defined('BASEPATH') or exit('No direct script access allowed');

class murid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['murid'] = $this->Madmin->get_all_data('tbl_murid')->result();
        // $this->load->view('admin/_partial/header');
        // $this->load->view('admin/_partial/sidebar');
        // $this->load->view('admin/_partial/topnav');
        $this->load->view('admin/murid/tampil', $data);
        // $this->load->view('admin/_partial/footer');
    }

    public function add()
    {
        // if(empty($this->session->userdata('userName'))){
        // 	redirect('adminpanel');
        // }
        // $this->load->view('admin/layout/header');
        // $this->load->view('admin/layout/menu');
        $this->load->view('admin/murid/formAdd');
        // $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $dataWhere = array('id_murid' => $id);
        $data['murid'] = $this->Madmin->get_by_id('tbl_murid', $dataWhere)->row_object();
        $this->load->view('admin/murid/formEdit', $data);
    }

    public function save()
    {

        $id_kelas = $this->input->post('id_kelas');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $jenkel = $this->input->post('jenkel');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_ortu = $this->input->post('nama_ortu');
        $kontak = $this->input->post('kontak');
        $config['upload_path'] = './assets/foto_profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $agama = $this->input->post('agama');
        $nik = $this->input->post('nik');
        $email_ortu = $this->input->post('email_ortu');

        if ($this->upload->do_upload('foto_profil')) {
            $data_file = $this->upload->data();

            $data_insert = array(
                'id_kelas' => $id_kelas,
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'jenkel' => $jenkel,
                'alamat' => $alamat,
                'tgl_lahir' => $tgl_lahir,
                'nama_ortu' => $nama_ortu,
                'kontak' => $kontak,
                'foto_profil' =>  $data_file['file_name'],
                'statusAktif' => 'Y',
                'agama' => $agama,
                'nik' => $nik,
                'email_ortu' => $email_ortu

            );

            $this->Madmin->insert('tbl_murid', $data_insert);
            redirect('murid');
        } else {
            // uncomment ini kalo ada error lagi
            // echo json_encode($this->upload->display_errors());
            // exit;
            redirect('murid/add');
        }
    }

    public function ubah_status($id)
    {
        // if (empty($this->session->userdata('username'))) {
        //     redirect('adminpanel');
        // }
        $dataWhere = array('id_murid' => $id);
        $result = $this->Madmin->get_by_id('tbl_murid', $dataWhere)->row_object();
        $status = $result->statusAktif;
        if ($status == "Y") {
            $dataUpdate = array('statusAktif' => "N");
        } else {
            $dataUpdate = array('statusAktif' => "Y");
        }
        $this->Madmin->update('tbl_murid', $dataUpdate, 'id_murid', $id);
        redirect('murid');
    }

    public function update()
    {
        $id_murid = $this->input->post('id_murid');
        $id_kelas = $this->input->post('id_kelas');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $jenkel = $this->input->post('jenkel');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_ortu = $this->input->post('nama_ortu');
        $kontak = $this->input->post('kontak');
        $agama = $this->input->post('agama');
        $nik = $this->input->post('nik');
        $email_ortu = $this->input->post('email_ortu');

        $data_file = null;
        $config['upload_path'] = './assets/foto_profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);


        $dataUpdate = array(
            'id_kelas' => $id_kelas,
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'jenkel' => $jenkel,
            'alamat' => $alamat,
            'tgl_lahir' => $tgl_lahir,
            'nama_ortu' => $nama_ortu,
            'kontak' => $kontak,
            'statusAktif' => 'Y',
            'agama' => $agama,
            'nik' => $nik,
            'email_ortu' => $email_ortu
        );

        if ($_FILES['foto_profil']['name'] != '') {
            if ($this->upload->do_upload('foto_profil')) {
                $data_file = $this->upload->data();
                $dataUpdate['foto_profil'] = $data_file['file_name'];
            }
        }

        $this->Madmin->update('tbl_murid', $dataUpdate, 'id_murid', $id_murid);
        redirect('murid');
        // if ($this->upload->do_upload('foto_profil')) {
        //     $data_file = $this->upload->data();

        // } else {

        //     $dataUpdate = array(
        //         'id_murid' => $id,
        //         'id_kelas' => $id_kelas,
        //         'username' => $username,
        //         'password' => $password,
        //         'nama' => $nama,
        //         'jenkel' => $jenkel,
        //         'alamat' => $alamat,
        //         'tgl_lahir' => $tgl_lahir,
        //         'nama_ortu' => $nama_ortu,
        //         'kontak' => $kontak,
        //         'foto_profil' =>  $data_file['file_name'],
        //         'statusAktif' => 'Y'
        //     );
        //     $this->Madmin->update('tbl_murid', $dataUpdate, 'id_murid', $id_murid);

        //     redirect('murid');
        // }
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_murid', 'id_murid', $id);
        redirect('murid');
    }
}
