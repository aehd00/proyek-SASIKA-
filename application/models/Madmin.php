<?php

class Madmin extends CI_Model
{

    public function cek_login($u, $p)
    {
        $this->db->where('username',$u);
        $this->db->where('password',$p);
        $result = $this->db->get('tbl_guru',1);
        return $result;
    }
    public function cek_login_user($u, $p)
    {
        $this->db->where('username',$u);
        $this->db->where('password',$p);
        $result = $this->db->get('tbl_murid',1);
        return $result;
    }

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $id, $val)
    {
        $this->db->delete($tabel, array($id => $val));
    }

    public function get_count_data($table) {
        return $this->db->count_all_results($table);
    }

    // public function cek_login_member($u, $p)
    // {
    //     $q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p, 'statusAktif' => 'Y'));
    //     return $q;
    // }
}
