<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function login()
    {
        $this->load->view('login');
    }


    public function dashboard()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('');
        }
        $id_murid = $this->session->userdata('id_user');
        $data['murid'] = $this->db->get_where('tbl_murid', ['id_murid' => $id_murid])->row();
        // $data['murid'] = $this->Madmin->get_all_data('tbl_murid')->result();
        $this->load->view('user/tampil', $data);
    }

    public function jadwal()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('');
        }
        $data['jadwal'] = $this->Madmin->get_all_data('tbl_jadwal')->result();
        $this->load->view('user/jadwal', $data);
    }

    public function profile()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('');
        }

        $id_murid = $this->session->userdata('id_user');
        $data['murid'] = $this->db->get_where('tbl_murid', ['id_murid' => $id_murid])->row();
        $this->load->view('admin/profile/profile', $data);
    }

    public function murid()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('');
        }
        $data['murid'] = $this->Madmin->get_all_data('tbl_murid')->result();
        $this->load->view('user/murid', $data);
    }

    public function presensi()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('');
        }

        $this->load->model('Model_presensi', 'presensi');

        $id_murid = $this->session->userdata('id_user');
        $data['presensi'] = $this->presensi->get_all_data($id_murid);

        $this->load->view('user/presensi', $data);
    }

    public function get_by_id($id)
    {
        $dataWhere = array('id_murid' => $id);
        $data['murid'] = $this->Madmin->get_by_id('tbl_murid', $dataWhere)->row_object();
        $this->load->view('admin/profile/profile', $data);
    }

    public function get_by_id_kontak($id)
    {
        $dataWhere = array('id_murid' => $id);
        $data['murid'] = $this->Madmin->get_by_id('tbl_murid', $dataWhere)->row_object();
        $this->load->view('user/kontakPribadi', $data);
    }
    public function get_by_id_darurat($id)
    {
        $dataWhere = array('id_murid' => $id);
        $data['murid'] = $this->Madmin->get_by_id('tbl_murid', $dataWhere)->row_object();
        $this->load->view('user/kontakDarurat', $data);
    }

    public function send()
    {

        $cp_namamurid = $this->input->post('cp_namamurid');
        $cp_kelas = $this->input->post('cp_kelas');
        $cp_jenkel = $this->input->post('cp_jenkel');
        $cp_namaortu = $this->input->post('cp_namaortu');
        $cp_kontak = $this->input->post('cp_kontak');
        $cp_email = $this->input->post('cp_email');
        $cp_tanggal = $this->input->post('cp_tanggal');
        $cp_pesan = $this->input->post('cp_pesan');

        // echo json_encode($_FILES);
        // exit;

        $data_insert = array(
            'cp_namamurid' => $cp_namamurid,
            'cp_kelas' => $cp_kelas,
            'cp_jenkel' => $cp_jenkel,
            'cp_namaortu' => $cp_namaortu,
            'cp_kontak' => $cp_kontak,
            'cp_email' => $cp_email,
            'cp_tanggal' => $cp_tanggal,
            'cp_pesan' => $cp_pesan,
        );

        $this->Madmin->insert('tbl_cp', $data_insert);
        redirect('main');
    }
}
