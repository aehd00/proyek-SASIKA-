<?php

class Model_presensi extends CI_Model
{
    private $table = 'tbl_presensi';
    private $primary_key = 'id_presensi';

    public function get_all_data($id_murid = null)
    {
        $this->db->select('tp.id_presensi, tg.nama as nama_guru, tm.nama as nama_murid, tj.subTopik, tp.id_kelas, tp.tgl_presensi, tp.ket_hadir, tp.catatan')
            ->join('tbl_guru tg', 'tg.id_guru = tp.id_guru', 'left')
            ->join('tbl_murid tm', 'tm.id_murid = tp.id_murid', 'left')
            ->join('tbl_jadwal tj', 'tj.id_jadwal = tp.id_jadwal', 'left');
        if ($id_murid != null) $this->db->where('tp.id_murid', $id_murid);
        $data =  $this->db->get("$this->table tp");

        return $data->result();
    }

    public function get_data_by_id(int $id)
    {
        $data = $this->db->get_where($this->table, [$this->primary_key => $id]);

        return $data->row();
    }

    public function save($data)
    {
        $inserted = $this->db->insert($this->table, $data);
        return $inserted;
    }

    public function update(int $id, $data)
    {
        $updated = $this->db->where($this->primary_key, $id)->update($this->table, $data);
        return $updated;
    }

    public function delete(int $id)
    {
        $deleted = $this->db->delete($this->table, [$this->primary_key => $id]);
        return $deleted;
    }
}
