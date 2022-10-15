<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dakungall_model extends CI_Model
{

    public $table = 'v_dakungall';
    public $table2 = 'v_dakungall';
    public $table3 = 't_dakung_rekomjak';
    public $id = 'id_calon_rekomjak';
    public $id2 = 'id_dakung';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('kode_usulan,id_calon_rekomjak,nama,arahan_pimpinan,status_calon_rekomjak,created_by,created_date,modified_by,modified_date,nama_pengusul,surat_usulan,tahun_usulan,latar_belakang,identifikasi_masalah,tujuan,catatan,telepon,status_usulan,id_usulan,jabatan,id_user');
        $this->datatables->from('v_dakungall');
        //add this line for join
        //$this->datatables->join('table2', 'v_dakungall.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('dakungall/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm')), 'id_calon_rekomjak');
        return $this->datatables->generate();
    }
    function jsonfile($id) {
        $this->datatables->select('id_dakung,id_kategori,id_jenis_kegiatan,id_calon_rekomjak,judul_dakung,file_dakung');
        $this->datatables->from('t_dakung_rekomjak');
        $this->datatables->where('id_calon_rekomjak',$id);
        $this->datatables->edit_column('judul_dakung', anchor(site_url('assets/doc_/$2'),'<i class="fa fa-file-pdf-o fa-2x pr-1" aria-hidden="true"></i>$1','target="_blank"'), 'judul_dakung, file_dakung');
        //add this line for join
        //$this->datatables->join('table2', 'v_calon.field = table2.field');
        $this->datatables->add_column('action', anchor('#','<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" data-href="'.site_url('dakungall/del/$1').'" data-toggle="modal" data-target="#confirm-delete"'), 'id_dakung');
        return $this->datatables->generate();
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    // get data by id
    function get_by_idfile($id)
    {
        $this->db->where($this->id2, $id);
        return $this->db->get($this->table3)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_calon_rekomjak', $q);
	$this->db->or_like('id_calon_rekomjak', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('arahan_pimpinan', $q);
	$this->db->or_like('status_calon_rekomjak', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('created_date', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('modified_date', $q);
	$this->db->or_like('nama_pengusul', $q);
	$this->db->or_like('surat_usulan', $q);
	$this->db->or_like('tahun_usulan', $q);
	$this->db->or_like('latar_belakang', $q);
	$this->db->or_like('identifikasi_masalah', $q);
	$this->db->or_like('tujuan', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('status_usulan', $q);
	$this->db->or_like('id_usulan', $q);
	$this->db->or_like('jabatan', $q);
	$this->db->or_like('id_user', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_calon_rekomjak', $q);
	$this->db->or_like('id_calon_rekomjak', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('arahan_pimpinan', $q);
	$this->db->or_like('status_calon_rekomjak', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('created_date', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('modified_date', $q);
	$this->db->or_like('nama_pengusul', $q);
	$this->db->or_like('surat_usulan', $q);
	$this->db->or_like('tahun_usulan', $q);
	$this->db->or_like('latar_belakang', $q);
	$this->db->or_like('identifikasi_masalah', $q);
	$this->db->or_like('tujuan', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('status_usulan', $q);
	$this->db->or_like('id_usulan', $q);
	$this->db->or_like('jabatan', $q);
	$this->db->or_like('id_user', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table3, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
     // delete data
     function del($id)
     {
         $this->db->where($this->id2, $id);
         $this->db->delete($this->table3);
     }

}

/* End of file Dakungall_model.php */
/* Location: ./application/models/Dakungall_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-15 05:10:20 */
/* http://harviacode.com */