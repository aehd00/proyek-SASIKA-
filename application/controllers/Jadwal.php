<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['jadwal'] = $this->Madmin->get_all_data('tbl_jadwal')->result();
        // $this->load->view('admin/_partial/header');
        // $this->load->view('admin/_partial/sidebar');
        // $this->load->view('admin/_partial/topnav');
        $this->load->view('admin/jadwal/jadwal', $data);
        // $this->load->view('admin/_partial/footer');
    }

    public function jadwal()
    {
        $data['jadwal'] = $this->Madmin->get_all_data('tbl_jadwal')->result();
        $this->load->view('admin/jadwal/jadwal', $data);
    }

    public function viewJadwal()
    {
        $data['jadwal'] = $this->Madmin->get_all_data('tbl_jadwal')->result();
        $this->load->view('admin/jadwal/jadwalJadwal', $data);
    }

    public function add()
    {
        // if(empty($this->session->userdata('userName'))){
        // 	redirect('adminpanel');
        // }
        // $this->load->view('admin/layout/header');
        // $this->load->view('admin/layout/menu');
        $this->load->view('admin/jadwal/formAdd');
        // $this->load->view('admin/layout/footer');
    }

    public function addJadwal()
    {
        $data['idg'] = $this->Madmin->get_all_data('tbl_guru')->result();
        $this->load->view('admin/jadwal/formAddJadwal', $data);
    }
    public function get_by_id_jadwal($id)
    {
        $dataWhere = array('id_jadwal' => $id);
        $data['idg'] = $this->Madmin->get_all_data('tbl_guru')->result();
        $data['jd'] = $this->Madmin->get_by_id('tbl_jadwal', $dataWhere)->row_object();
        $this->load->view('admin/jadwal/formEditJadwal', $data);
    }

    public function updateJd()
    {
        $id = $this->input->post('idj');
        $kl = $this->input->post('kelas');
        $guru = $this->input->post('guru');
        $tgl = $this->input->post('tanggal');
        $mt = $this->input->post('materi');
        $sbp = $this->input->post('subTopik');
        $dataUpdate = array(
            'id_jadwal' => $id,
            'id_kelas' => $kl,
            'id_guru' => $guru,
            'tanggal' => $tgl,
            'materi' => $mt,
            'subTopik' => $sbp
        );
        $this->Madmin->update('tbl_jadwal', $dataUpdate, 'id_jadwal', $id);
        redirect('jadwal/jadwal');
    }

    public function saveJadwal()
    {
        $jadwal = $this->input->post('jadwal');
        $kelas = $this->input->post('kelas');
        $guru = $this->input->post('guru');
        $tanggal = $this->input->post('tanggal');
        $materi = $this->input->post('topik');
        $subTopik = $this->input->post('subTopik');
        $data_insert = array(
            'id_jadwal' => $jadwal,
            'id_kelas' => $kelas,
            'id_guru' => $guru,
            'tanggal' => $tanggal,
            'materi' => $materi,
            'subTopik' => $subTopik
        );
        $this->Madmin->insert('tbl_jadwal', $data_insert);
        redirect('jadwal/jadwal');
    }

    public function get_by_id($id)
    {
        $dataWhere = array('id_jadwal' => $id);
        $data['jadwal'] = $this->Madmin->get_by_id('tbl_jadwal', $dataWhere)->row_object();
        $this->load->view('admin/jadwal/formEdit', $data);
    }


    public function save()
    {
        $id = $this->session->userdata('id_jadwal');
        $id_kelas = $this->session->userdata('id_kelas');
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $nama = $this->session->userdata('nama');
        $jenkel = $this->session->userdata('jenkel');
        $alamat = $this->session->userdata('alamat');
        $tgl_lahir = $this->session->userdata('tgl_lahir');
        $nama_ortu = $this->session->userdata('nama_ortu');
        $kontak = $this->session->userdata('kontak');
        $config['upload_path'] = './assets/foto_profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_profil')) {
            $data_file = $this->upload->data();

            $data_insert = array(
                'id_jadwal' => $id,
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
                'statusAktif' => 'Y'
            );

            $this->Madmin->insert('tbl_jadwal', $data_insert);
            redirect('jadwal');
        } else {
            redirect('jadwal/add');
        }
    }

    public function ubah_status($id)
    {
        // if (empty($this->session->userdata('username'))) {
        //     redirect('adminpanel');
        // }
        $dataWhere = array('id_jadwal' => $id);
        $result = $this->Madmin->get_by_id('tbl_jadwal', $dataWhere)->row_object();
        $status = $result->statusAktif;
        if ($status == "Y") {
            $dataUpdate = array('statusAktif' => "N");
        } else {
            $dataUpdate = array('statusAktif' => "Y");
        }
        $this->Madmin->update('tbl_jadwal', $dataUpdate, 'id_jadwal', $id);
        redirect('jadwal');
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_jadwal', 'id_jadwal', $id);
        redirect('jadwal');
    }

    public function deleteJadwal($id)
    {
        $this->Madmin->delete('tbl_jadwal', 'id_jadwal', $id);
        redirect('jadwal/jadwal');
    }
}
