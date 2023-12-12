<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $this->load->model('Madmin');
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $cek = $this->Madmin->cek_login($u, $p);
        $cekUser = $this->Madmin->cek_login_user($u, $p);

        if ($cek->num_rows()) {
            $data     = $cek->row_array();
            $name     = $data['nama'];
            $username = $data['username'];
            $prof = $data['profil'];
            $data_session  = array(
                'nama'     => $name,
                'profil'     => $prof,
                'username'      => $username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('adminpanel/dashboard');
        } else if ($cekUser->num_rows()) {
            $data     = $cekUser->row_array();
            $id_user = $data['id_murid'];
            $nama     = $data['nama'];
            $kelas     = $data['id_kelas'];
            $jenkel     = $data['jenkel'];
            $alamat     = $data['alamat'];
            $tgl     = $data['tgl_lahir'];
            $agama     = $data['agama'];
            $nik     = $data['nik'];
            $username = $data['username'];
            $prof = $data['foto_profil'];

            $nama_ortu = $data['nama_ortu'];
            $notelp_ortu = $data['kontak'];
            $email_ortu = $data['email_ortu'];
            // $namaAyah     = $data['nama_ayah'];
            // $emailAyah     = $data['email_ayah'];
            // $teleponAyah     = $data['telepon_ayah'];
            // $namaIbu     = $data['nama_ibu'];
            // $teleponIbu     = $data['telepon_ibu'];
            // $emailIbu     = $data['email_ibu'];



            $data_session  = array(
                'id_user' => $id_user,
                'nama'     => $nama,
                'kelas'     => $kelas,
                'profil'     => $prof,
                'username'      => $username,
                'jenis'      => $jenkel,
                'agama'      => $agama,
                'tgl'      => $tgl,
                'nik'      => $nik,
                'alamat'      => $alamat,
                // 'namaAyah'     => $namaAyah,
                // 'emailAyah'     => $emailAyah,
                // 'teleponAyah'      => $teleponAyah,
                // 'namaIbu'      => $namaIbu,
                // 'emailIbu'      => $emailIbu,
                // 'teleponIbu'      => $teleponIbu,
                'nama_ortu'      => $nama_ortu,
                'notelp_ortu'      => $notelp_ortu,
                'email_ortu'      => $email_ortu,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('main/dashboard');
        } else {
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'jml_murid' => $this->Madmin->get_count_data('tbl_murid'),
            'jml_presensi' => $this->Madmin->get_count_data('tbl_presensi'),
            'jml_cp' => $this->Madmin->get_count_data('tbl_cp'),
            'main' => $this->Madmin->get_all_data('tbl_cp')->result()
        ];
        $this->load->view('admin/dashboard', $data);
    }

    public function contact_person()
    {
        $data = [
            'title' => 'Pesan Masuk',
            'main' => $this->Madmin->get_all_data('tbl_cp')->result()
        ];
        $this->load->view('admin/cp', $data);
    }
}
