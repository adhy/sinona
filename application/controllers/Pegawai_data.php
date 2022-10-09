<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai_data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Pegawai_data_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','pegawai_data/pegawai_data_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pegawai_data_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pegawai_data_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pegawai' => $row->id_pegawai,
		'nama' => $row->nama,
		'nip' => $row->nip,
		'golongan' => $row->golongan,
		'jabatan' => $row->jabatan,
		'nik' => $row->nik,
		'tempat_lahir' => $row->tempat_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'jenis_kelamin' => $row->jenis_kelamin,
		'alamat' => $row->alamat,
		'telp' => $row->telp,
		'email' => $row->email,
		'status_menikah' => $row->status_menikah,
		'created_by' => $row->created_by,
		'created_date' => $row->created_date,
		'modified_by' => $row->modified_by,
		'modified_date' => $row->modified_date,
	    );
            $this->template->load('template','pegawai_data/pegawai_data_read', $data);
        } else {
            notif('2');
            redirect(site_url('pegawai_data'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('pegawai_data/create_action'),
	    'id_pegawai' => set_value('id_pegawai'),
	    'nama' => set_value('nama'),
	    'nip' => set_value('nip'),
	    'golongan' => set_value('golongan'),
	    'jabatan' => set_value('jabatan'),
	    'nik' => set_value('nik'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'alamat' => set_value('alamat'),
	    'telp' => set_value('telp'),
	    'email' => set_value('email'),
	    'status_menikah' => set_value('status_menikah'),
	    'created_by' => set_value('created_by'),
	    'created_date' => set_value('created_date'),
	    'modified_by' => set_value('modified_by'),
	    'modified_date' => set_value('modified_date'),
	);
        $this->template->load('template','pegawai_data/pegawai_data_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'nip' => $this->input->post('nip',TRUE),
		'golongan' => $this->input->post('golongan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'telp' => $this->input->post('telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'status_menikah' => $this->input->post('status_menikah',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
	    );

            $this->Pegawai_data_model->insert($data);
            notif('0');
            redirect(site_url('pegawai_data'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pegawai_data_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbaharui',
                'action' => site_url('pegawai_data/update_action'),
		'id_pegawai' => set_value('id_pegawai', $row->id_pegawai),
		'nama' => set_value('nama', $row->nama),
		'nip' => set_value('nip', $row->nip),
		'golongan' => set_value('golongan', $row->golongan),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'nik' => set_value('nik', $row->nik),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'alamat' => set_value('alamat', $row->alamat),
		'telp' => set_value('telp', $row->telp),
		'email' => set_value('email', $row->email),
		'status_menikah' => set_value('status_menikah', $row->status_menikah),
		'created_by' => set_value('created_by', $row->created_by),
		'created_date' => set_value('created_date', $row->created_date),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'modified_date' => set_value('modified_date', $row->modified_date),
	    );
            $this->template->load('template','pegawai_data/pegawai_data_form', $data);
        } else {
            notif('2');
            redirect(site_url('pegawai_data'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pegawai', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'nip' => $this->input->post('nip',TRUE),
		'golongan' => $this->input->post('golongan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'telp' => $this->input->post('telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'status_menikah' => $this->input->post('status_menikah',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
	    );

            $this->Pegawai_data_model->update($this->input->post('id_pegawai', TRUE), $data);
            notif('1');
            redirect(site_url('pegawai_data'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pegawai_data_model->get_by_id($id);

        if ($row) {
            $this->Pegawai_data_model->delete($id);
            notif('3');
            redirect(site_url('pegawai_data'));
        } else {
            notif('2');
            redirect(site_url('pegawai_data'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('nip', 'nip', 'trim|required');
	$this->form_validation->set_rules('golongan', 'golongan', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('telp', 'telp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('status_menikah', 'status menikah', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('created_date', 'created date', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('modified_date', 'modified date', 'trim|required');

	$this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Pegawai_data.php */
/* Location: ./application/controllers/Pegawai_data.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-09 09:04:25 */
/* http://harviacode.com */