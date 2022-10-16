<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usulan_model extends CI_Model
{

    public $table = 'v_usulan';
    public $table3 = 't_usulan';
    public $table2 = 't_calon_rekomjak';
    public $id = 'id_usulan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json($id,$di) {
        if($di==1||$di==2||$di==3){
            $this->datatables->select('id_usulan,kode_usulan,Satuan_Kerja,nama_pengusul,jabatan_pengusul,surat_usulan,tahun_usulan,latar_belakang,identifikasi_masalah,tujuan,catatan,telepon,email,status_usulan,created_by,created_date,modified_by,modified_date,nama,id_user,id_pegawai');
            $this->datatables->from('v_usulan');
            //add this line for join
            //$this->datatables->join('table2', 'v_usulan.field = table2.field');
            $this->datatables->add_column('surat_usulan', '$1', 'download(surat_usulan)');
            $this->datatables->add_column('status_us', '$1', 'status(status_usulan)');
            $this->datatables->add_column('nama', '$1', 'disposisi(nama)');
            $this->datatables->add_column('action', '$1', 'dispotombol(id_usulan,status_usulan)');
            return $this->datatables->generate();
        }else{
            $this->datatables->select('id_usulan,kode_usulan,Satuan_Kerja,nama_pengusul,jabatan_pengusul,surat_usulan,tahun_usulan,latar_belakang,identifikasi_masalah,tujuan,catatan,telepon,email,status_usulan,created_by,created_date,modified_by,modified_date,nama,id_user,id_pegawai');
            $this->datatables->from('v_usulan');
            $this->datatables->where('id_user',$id);
            //add this line for join
            //$this->datatables->join('table2', 'v_usulan.field = table2.field');
            $this->datatables->add_column('surat_usulan', '$1', 'download(surat_usulan)');
            $this->datatables->add_column('status_us', '$1', 'status(status_usulan)');
            $this->datatables->add_column('nama', '$1', 'disposisi(nama)');
            $this->datatables->add_column('action', '$1', 'dispotombol(id_usulan,status_usulan)');
            return $this->datatables->generate();
        }

        
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
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_usulan', $q);
	$this->db->or_like('id_usulan', $q);
	$this->db->or_like('kode_usulan', $q);
	$this->db->or_like('Satuan_Kerja', $q);
	$this->db->or_like('nama_pengusul', $q);
	$this->db->or_like('jabatan_pengusul', $q);
	$this->db->or_like('surat_usulan', $q);
	$this->db->or_like('tahun_usulan', $q);
	$this->db->or_like('latar_belakang', $q);
	$this->db->or_like('identifikasi_masalah', $q);
	$this->db->or_like('tujuan', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('status_usulan', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('created_date', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('modified_date', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_usulan', $q);
	$this->db->or_like('id_usulan', $q);
	$this->db->or_like('kode_usulan', $q);
	$this->db->or_like('Satuan_Kerja', $q);
	$this->db->or_like('nama_pengusul', $q);
	$this->db->or_like('jabatan_pengusul', $q);
	$this->db->or_like('surat_usulan', $q);
	$this->db->or_like('tahun_usulan', $q);
	$this->db->or_like('latar_belakang', $q);
	$this->db->or_like('identifikasi_masalah', $q);
	$this->db->or_like('tujuan', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('status_usulan', $q);
	$this->db->or_like('created_by', $q);
	$this->db->or_like('created_date', $q);
	$this->db->or_like('modified_by', $q);
	$this->db->or_like('modified_date', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table2, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
    function updateusulan($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table3, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Usulan_model.php */
/* Location: ./application/models/Usulan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-13 14:21:17 */
/* http://harviacode.com */