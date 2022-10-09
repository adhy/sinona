<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usulan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Usulan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','usulan/v_usulan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Usulan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Usulan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_usulan' => $row->kode_usulan,
		'nama_pengusul' => $row->nama_pengusul,
		'jabatan_pengusul' => $row->jabatan_pengusul,
		'surat_usulan' => $row->surat_usulan,
		'tahun_usulan' => $row->tahun_usulan,
		'latar_belakang' => $row->latar_belakang,
		'identifikasi_masalah' => $row->identifikasi_masalah,
		'tujuan' => $row->tujuan,
		'catatan' => $row->catatan,
		'telepon' => $row->telepon,
		'email' => $row->email,
		'status_usulan' => $row->status_usulan,
		'created_by' => $row->created_by,
		'created_date' => $row->created_date,
		'modified_by' => $row->modified_by,
		'modified_date' => $row->modified_date,
		'nama_instansi_lembaga' => $row->nama_instansi_lembaga,
		'nama_unit_utama' => $row->nama_unit_utama,
		'nama_satuan_kerja' => $row->nama_satuan_kerja,
		'nama_dinkes_kab' => $row->nama_dinkes_kab,
		'Satuan_Kerja' => $row->Satuan_Kerja,
		'id_usulan' => $row->id_usulan,
	    );
            $this->template->load('template','usulan/v_usulan_read', $data);
        } else {
            notif('2');
            redirect(site_url('usulan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('usulan/create_action'),
	    'kode_usulan' => set_value('kode_usulan'),
	    'nama_pengusul' => set_value('nama_pengusul'),
	    'jabatan_pengusul' => set_value('jabatan_pengusul'),
	    'surat_usulan' => set_value('surat_usulan'),
	    'tahun_usulan' => set_value('tahun_usulan'),
	    'latar_belakang' => set_value('latar_belakang'),
	    'identifikasi_masalah' => set_value('identifikasi_masalah'),
	    'tujuan' => set_value('tujuan'),
	    'catatan' => set_value('catatan'),
	    'telepon' => set_value('telepon'),
	    'email' => set_value('email'),
	    'status_usulan' => set_value('status_usulan'),
	    'created_by' => set_value('created_by'),
	    'created_date' => set_value('created_date'),
	    'modified_by' => set_value('modified_by'),
	    'modified_date' => set_value('modified_date'),
	    'nama_instansi_lembaga' => set_value('nama_instansi_lembaga'),
	    'nama_unit_utama' => set_value('nama_unit_utama'),
	    'nama_satuan_kerja' => set_value('nama_satuan_kerja'),
	    'nama_dinkes_kab' => set_value('nama_dinkes_kab'),
	    'Satuan_Kerja' => set_value('Satuan_Kerja'),
	    'id_usulan' => set_value('id_usulan'),
	);
        $this->template->load('template','usulan/v_usulan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_usulan' => $this->input->post('kode_usulan',TRUE),
		'nama_pengusul' => $this->input->post('nama_pengusul',TRUE),
		'jabatan_pengusul' => $this->input->post('jabatan_pengusul',TRUE),
		'surat_usulan' => $this->input->post('surat_usulan',TRUE),
		'tahun_usulan' => $this->input->post('tahun_usulan',TRUE),
		'latar_belakang' => $this->input->post('latar_belakang',TRUE),
		'identifikasi_masalah' => $this->input->post('identifikasi_masalah',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'catatan' => $this->input->post('catatan',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'email' => $this->input->post('email',TRUE),
		'status_usulan' => $this->input->post('status_usulan',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
		'nama_instansi_lembaga' => $this->input->post('nama_instansi_lembaga',TRUE),
		'nama_unit_utama' => $this->input->post('nama_unit_utama',TRUE),
		'nama_satuan_kerja' => $this->input->post('nama_satuan_kerja',TRUE),
		'nama_dinkes_kab' => $this->input->post('nama_dinkes_kab',TRUE),
		'Satuan_Kerja' => $this->input->post('Satuan_Kerja',TRUE),
		'id_usulan' => $this->input->post('id_usulan',TRUE),
	    );

            $this->Usulan_model->insert($data);
            notif('0');
            redirect(site_url('usulan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Usulan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbaharui',
                'action' => site_url('usulan/update_action'),
		'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
		'nama_pengusul' => set_value('nama_pengusul', $row->nama_pengusul),
		'jabatan_pengusul' => set_value('jabatan_pengusul', $row->jabatan_pengusul),
		'surat_usulan' => set_value('surat_usulan', $row->surat_usulan),
		'tahun_usulan' => set_value('tahun_usulan', $row->tahun_usulan),
		'latar_belakang' => set_value('latar_belakang', $row->latar_belakang),
		'identifikasi_masalah' => set_value('identifikasi_masalah', $row->identifikasi_masalah),
		'tujuan' => set_value('tujuan', $row->tujuan),
		'catatan' => set_value('catatan', $row->catatan),
		'telepon' => set_value('telepon', $row->telepon),
		'email' => set_value('email', $row->email),
		'status_usulan' => set_value('status_usulan', $row->status_usulan),
		'created_by' => set_value('created_by', $row->created_by),
		'created_date' => set_value('created_date', $row->created_date),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'modified_date' => set_value('modified_date', $row->modified_date),
		'nama_instansi_lembaga' => set_value('nama_instansi_lembaga', $row->nama_instansi_lembaga),
		'nama_unit_utama' => set_value('nama_unit_utama', $row->nama_unit_utama),
		'nama_satuan_kerja' => set_value('nama_satuan_kerja', $row->nama_satuan_kerja),
		'nama_dinkes_kab' => set_value('nama_dinkes_kab', $row->nama_dinkes_kab),
		'Satuan_Kerja' => set_value('Satuan_Kerja', $row->Satuan_Kerja),
		'id_usulan' => set_value('id_usulan', $row->id_usulan),
	    );
            $this->template->load('template','usulan/v_usulan_form', $data);
        } else {
            notif('2');
            redirect(site_url('usulan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'kode_usulan' => $this->input->post('kode_usulan',TRUE),
		'nama_pengusul' => $this->input->post('nama_pengusul',TRUE),
		'jabatan_pengusul' => $this->input->post('jabatan_pengusul',TRUE),
		'surat_usulan' => $this->input->post('surat_usulan',TRUE),
		'tahun_usulan' => $this->input->post('tahun_usulan',TRUE),
		'latar_belakang' => $this->input->post('latar_belakang',TRUE),
		'identifikasi_masalah' => $this->input->post('identifikasi_masalah',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'catatan' => $this->input->post('catatan',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'email' => $this->input->post('email',TRUE),
		'status_usulan' => $this->input->post('status_usulan',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
		'nama_instansi_lembaga' => $this->input->post('nama_instansi_lembaga',TRUE),
		'nama_unit_utama' => $this->input->post('nama_unit_utama',TRUE),
		'nama_satuan_kerja' => $this->input->post('nama_satuan_kerja',TRUE),
		'nama_dinkes_kab' => $this->input->post('nama_dinkes_kab',TRUE),
		'Satuan_Kerja' => $this->input->post('Satuan_Kerja',TRUE),
		'id_usulan' => $this->input->post('id_usulan',TRUE),
	    );

            $this->Usulan_model->update($this->input->post('', TRUE), $data);
            notif('1');
            redirect(site_url('usulan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Usulan_model->get_by_id($id);

        if ($row) {
            $this->Usulan_model->delete($id);
            notif('3');
            redirect(site_url('usulan'));
        } else {
            notif('2');
            redirect(site_url('usulan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_usulan', 'kode usulan', 'trim|required');
	$this->form_validation->set_rules('nama_pengusul', 'nama pengusul', 'trim|required');
	$this->form_validation->set_rules('jabatan_pengusul', 'jabatan pengusul', 'trim|required');
	$this->form_validation->set_rules('surat_usulan', 'surat usulan', 'trim|required');
	$this->form_validation->set_rules('tahun_usulan', 'tahun usulan', 'trim|required');
	$this->form_validation->set_rules('latar_belakang', 'latar belakang', 'trim|required');
	$this->form_validation->set_rules('identifikasi_masalah', 'identifikasi masalah', 'trim|required');
	$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
	$this->form_validation->set_rules('catatan', 'catatan', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('status_usulan', 'status usulan', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('created_date', 'created date', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('modified_date', 'modified date', 'trim|required');
	$this->form_validation->set_rules('nama_instansi_lembaga', 'nama instansi lembaga', 'trim|required');
	$this->form_validation->set_rules('nama_unit_utama', 'nama unit utama', 'trim|required');
	$this->form_validation->set_rules('nama_satuan_kerja', 'nama satuan kerja', 'trim|required');
	$this->form_validation->set_rules('nama_dinkes_kab', 'nama dinkes kab', 'trim|required');
	$this->form_validation->set_rules('Satuan_Kerja', 'satuan kerja', 'trim|required');
	$this->form_validation->set_rules('id_usulan', 'id usulan', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Usulan.php */
/* Location: ./application/controllers/Usulan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-09 09:37:21 */
/* http://harviacode.com */