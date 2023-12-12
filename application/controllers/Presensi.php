<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->model('Model_presensi', 'presensi');

        $logged_in = $this->session->userdata('status');
        if (!$logged_in) redirect('main/login');
    }

    public function index()
    {
        $data = [
            'data_presensi' => $this->presensi->get_all_data()
        ];

        $this->load->view('admin/presensi/tampil', $data);
    }

    public function create()
    {
        $data = [
            'idg' => $this->Madmin->get_all_data('tbl_guru')->result(),
            'idm' => $this->Madmin->get_all_data('tbl_murid')->result(),
            'idj' => $this->Madmin->get_all_data('tbl_jadwal')->result()
        ];

        $this->load->view('admin/presensi/form_add', $data);
    }

    public function edit($id)
    {
        $data = [
            'idg' => $this->Madmin->get_all_data('tbl_guru')->result(),
            'idm' => $this->Madmin->get_all_data('tbl_murid')->result(),
            'idj' => $this->Madmin->get_all_data('tbl_jadwal')->result(),
            'presensi' => $this->presensi->get_data_by_id($id)
        ];
        $this->load->view('admin/presensi/form_edit', $data);
    }

    public function updatePres()
    {
        $id = $this->input->post('idpres');
        $gr = $this->input->post('guru');
        $mr = $this->input->post('murid');
        $kl = $this->input->post('kelas');
        $jd = $this->input->post('jadwal');
        $tgl = $this->input->post('tanggal');
        $ket = $this->input->post('keterangan');
        $ctt = $this->input->post('catatan');
        $dataUpdate = array(
            'id_guru' => $gr,
            'id_murid' => $mr,
            'id_kelas' => $kl,
            'id_jadwal' => $jd,
            'tgl_presensi' => $tgl,
            'ket_hadir' => $ket,
            'catatan' => $ctt
        );
        $updated = $this->presensi->update($id, $dataUpdate);

        // set flash data
        if ($updated) {
            $this->setFlashData('Data presensi berhasil disimpan.');
            redirect('presensi');
        } else {
            $this->setFlashData('Oops data presensi gagal disimpan. Silakan coba lagi.', 'warning');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function savePresensi()
    {
        $id_guru = $this->input->post('guru');
        $id_murid = $this->input->post('murid');
        $id_kelas = $this->input->post('kelas');
        $id_jadwal = $this->input->post('jadwal');
        $tgl_presensi = $this->input->post('tanggal');
        $ket_hadir = $this->input->post('keterangan');
        $catatan = $this->input->post('catatan');
        $data_insert = array(
            'id_guru' => $id_guru,
            'id_murid' => $id_murid,
            'id_kelas' => $id_kelas,
            'id_jadwal' => $id_jadwal,
            'tgl_presensi' => $tgl_presensi,
            'ket_hadir' => $ket_hadir,
            'catatan' => $catatan
        );
        $inserted = $this->presensi->save($data_insert);

        // set flash data
        if ($inserted) {
            $this->setFlashData('Data presensi berhasil disimpan.');
            redirect('presensi');
        } else {
            $this->setFlashData('Oops data presensi gagal disimpan. Silakan coba lagi.', 'warning');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $deleted = $this->presensi->delete($id);

        // set flash data
        $this->setFlashData('Oops data presensi gagal dihapus. Silakan coba lagi.', 'warning');
        if ($deleted) {
            $this->setFlashData('Data presensi berhasil dihapus.');
        }
        redirect('presensi');
    }

    private function setFlashData($alert_pesan, $alert_warna = 'primary')
    {
        $this->session->set_flashdata('alert_warna', $alert_warna);
        $this->session->set_flashdata('alert_pesan', $alert_pesan);
    }
}
