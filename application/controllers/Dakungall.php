<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dakungall extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Dakungall_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','dakungall/v_dakungall_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Dakungall_model->json();
    }

    public function read($id) 
    {
        $row = $this->Dakungall_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_usulan' => $row->kode_usulan,
		'id_calon_rekomjak' => $row->id_calon_rekomjak,
		'nama' => $row->nama,
		'arahan_pimpinan' => $row->arahan_pimpinan,
		'status_calon_rekomjak' => $row->status_calon_rekomjak,
		'created_by' => $row->created_by,
		'created_date' => $row->created_date,
		'modified_by' => $row->modified_by,
		'modified_date' => $row->modified_date,
		'nama_pengusul' => $row->nama_pengusul,
		'surat_usulan' => $row->surat_usulan,
		'tahun_usulan' => $row->tahun_usulan,
		'latar_belakang' => $row->latar_belakang,
		'identifikasi_masalah' => $row->identifikasi_masalah,
		'tujuan' => $row->tujuan,
		'catatan' => $row->catatan,
		'telepon' => $row->telepon,
		'status_usulan' => $row->status_usulan,
		'id_usulan' => $row->id_usulan,
		'jabatan' => $row->jabatan,
		'id_user' => $row->id_user,
	    );
            $this->template->load('template','dakungall/v_dakungall_read', $data);
        } else {
            notif('2');
            redirect(site_url('dakungall'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('dakungall/create_action'),
	    'kode_usulan' => set_value('kode_usulan'),
	    'id_calon_rekomjak' => set_value('id_calon_rekomjak'),
	    'nama' => set_value('nama'),
	    'arahan_pimpinan' => set_value('arahan_pimpinan'),
	    'status_calon_rekomjak' => set_value('status_calon_rekomjak'),
	    'created_by' => set_value('created_by'),
	    'created_date' => set_value('created_date'),
	    'modified_by' => set_value('modified_by'),
	    'modified_date' => set_value('modified_date'),
	    'nama_pengusul' => set_value('nama_pengusul'),
	    'surat_usulan' => set_value('surat_usulan'),
	    'tahun_usulan' => set_value('tahun_usulan'),
	    'latar_belakang' => set_value('latar_belakang'),
	    'identifikasi_masalah' => set_value('identifikasi_masalah'),
	    'tujuan' => set_value('tujuan'),
	    'catatan' => set_value('catatan'),
	    'telepon' => set_value('telepon'),
	    'status_usulan' => set_value('status_usulan'),
	    'id_usulan' => set_value('id_usulan'),
	    'jabatan' => set_value('jabatan'),
	    'id_user' => set_value('id_user'),
	);
        $this->template->load('template','dakungall/v_dakungall_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_usulan' => $this->input->post('kode_usulan',TRUE),
		'id_calon_rekomjak' => $this->input->post('id_calon_rekomjak',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'arahan_pimpinan' => $this->input->post('arahan_pimpinan',TRUE),
		'status_calon_rekomjak' => $this->input->post('status_calon_rekomjak',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
		'nama_pengusul' => $this->input->post('nama_pengusul',TRUE),
		'surat_usulan' => $this->input->post('surat_usulan',TRUE),
		'tahun_usulan' => $this->input->post('tahun_usulan',TRUE),
		'latar_belakang' => $this->input->post('latar_belakang',TRUE),
		'identifikasi_masalah' => $this->input->post('identifikasi_masalah',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'catatan' => $this->input->post('catatan',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'status_usulan' => $this->input->post('status_usulan',TRUE),
		'id_usulan' => $this->input->post('id_usulan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
	    );

            $this->Dakungall_model->insert($data);
            notif('0');
            redirect(site_url('dakungall'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dakungall_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbaharui',
                'action' => site_url('dakungall/update_action'),
		'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
		'id_calon_rekomjak' => set_value('id_calon_rekomjak', $row->id_calon_rekomjak),
		'nama' => set_value('nama', $row->nama),
		'arahan_pimpinan' => set_value('arahan_pimpinan', $row->arahan_pimpinan),
		'status_calon_rekomjak' => set_value('status_calon_rekomjak', $row->status_calon_rekomjak),
		'created_by' => set_value('created_by', $row->created_by),
		'created_date' => set_value('created_date', $row->created_date),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'modified_date' => set_value('modified_date', $row->modified_date),
		'nama_pengusul' => set_value('nama_pengusul', $row->nama_pengusul),
		'surat_usulan' => set_value('surat_usulan', $row->surat_usulan),
		'tahun_usulan' => set_value('tahun_usulan', $row->tahun_usulan),
		'latar_belakang' => set_value('latar_belakang', $row->latar_belakang),
		'identifikasi_masalah' => set_value('identifikasi_masalah', $row->identifikasi_masalah),
		'tujuan' => set_value('tujuan', $row->tujuan),
		'catatan' => set_value('catatan', $row->catatan),
		'telepon' => set_value('telepon', $row->telepon),
		'status_usulan' => set_value('status_usulan', $row->status_usulan),
		'id_usulan' => set_value('id_usulan', $row->id_usulan),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'id_user' => set_value('id_user', $row->id_user),
	    );
            $this->template->load('template','dakungall/v_dakungall_form', $data);
        } else {
            notif('2');
            redirect(site_url('dakungall'));
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
		'id_calon_rekomjak' => $this->input->post('id_calon_rekomjak',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'arahan_pimpinan' => $this->input->post('arahan_pimpinan',TRUE),
		'status_calon_rekomjak' => $this->input->post('status_calon_rekomjak',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
		'nama_pengusul' => $this->input->post('nama_pengusul',TRUE),
		'surat_usulan' => $this->input->post('surat_usulan',TRUE),
		'tahun_usulan' => $this->input->post('tahun_usulan',TRUE),
		'latar_belakang' => $this->input->post('latar_belakang',TRUE),
		'identifikasi_masalah' => $this->input->post('identifikasi_masalah',TRUE),
		'tujuan' => $this->input->post('tujuan',TRUE),
		'catatan' => $this->input->post('catatan',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'status_usulan' => $this->input->post('status_usulan',TRUE),
		'id_usulan' => $this->input->post('id_usulan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
	    );

            $this->Dakungall_model->update($this->input->post('', TRUE), $data);
            notif('1');
            redirect(site_url('dakungall'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dakungall_model->get_by_id($id);

        if ($row) {
            $this->Dakungall_model->delete($id);
            notif('3');
            redirect(site_url('dakungall'));
        } else {
            notif('2');
            redirect(site_url('dakungall'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_usulan', 'kode usulan', 'trim|required');
	$this->form_validation->set_rules('id_calon_rekomjak', 'id calon rekomjak', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('arahan_pimpinan', 'arahan pimpinan', 'trim|required');
	$this->form_validation->set_rules('status_calon_rekomjak', 'status calon rekomjak', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('created_date', 'created date', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('modified_date', 'modified date', 'trim|required');
	$this->form_validation->set_rules('nama_pengusul', 'nama pengusul', 'trim|required');
	$this->form_validation->set_rules('surat_usulan', 'surat usulan', 'trim|required');
	$this->form_validation->set_rules('tahun_usulan', 'tahun usulan', 'trim|required');
	$this->form_validation->set_rules('latar_belakang', 'latar belakang', 'trim|required');
	$this->form_validation->set_rules('identifikasi_masalah', 'identifikasi masalah', 'trim|required');
	$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
	$this->form_validation->set_rules('catatan', 'catatan', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('status_usulan', 'status usulan', 'trim|required');
	$this->form_validation->set_rules('id_usulan', 'id usulan', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Dakungall.php */
/* Location: ./application/controllers/Dakungall.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-15 05:10:20 */
/* http://harviacode.com */