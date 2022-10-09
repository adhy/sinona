<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Calon_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','calon/v_calon_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Calon_model->json();
    }

    public function read($id) 
    {
        $row = $this->Calon_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_usulan' => $row->kode_usulan,
		'id_calon_rekomjak' => $row->id_calon_rekomjak,
		'full_name' => $row->full_name,
		'arahan_pimpinan' => $row->arahan_pimpinan,
		'status_calon_rekomjak' => $row->status_calon_rekomjak,
		'created_by' => $row->created_by,
		'created_date' => $row->created_date,
		'modified_by' => $row->modified_by,
		'modified_date' => $row->modified_date,
	    );
            $this->template->load('template','calon/v_calon_read', $data);
        } else {
            notif('2');
            redirect(site_url('calon'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('calon/create_action'),
	    'kode_usulan' => set_value('kode_usulan'),
	    'id_calon_rekomjak' => set_value('id_calon_rekomjak'),
	    'full_name' => set_value('full_name'),
	    'arahan_pimpinan' => set_value('arahan_pimpinan'),
	    'status_calon_rekomjak' => set_value('status_calon_rekomjak'),
	    'created_by' => set_value('created_by'),
	    'created_date' => set_value('created_date'),
	    'modified_by' => set_value('modified_by'),
	    'modified_date' => set_value('modified_date'),
	);
        $this->template->load('template','calon/v_calon_form', $data);
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
		'full_name' => $this->input->post('full_name',TRUE),
		'arahan_pimpinan' => $this->input->post('arahan_pimpinan',TRUE),
		'status_calon_rekomjak' => $this->input->post('status_calon_rekomjak',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
	    );

            $this->Calon_model->insert($data);
            notif('0');
            redirect(site_url('calon'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Calon_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbaharui',
                'action' => site_url('calon/update_action'),
		'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
		'id_calon_rekomjak' => set_value('id_calon_rekomjak', $row->id_calon_rekomjak),
		'full_name' => set_value('full_name', $row->full_name),
		'arahan_pimpinan' => set_value('arahan_pimpinan', $row->arahan_pimpinan),
		'status_calon_rekomjak' => set_value('status_calon_rekomjak', $row->status_calon_rekomjak),
		'created_by' => set_value('created_by', $row->created_by),
		'created_date' => set_value('created_date', $row->created_date),
		'modified_by' => set_value('modified_by', $row->modified_by),
		'modified_date' => set_value('modified_date', $row->modified_date),
	    );
            $this->template->load('template','calon/v_calon_form', $data);
        } else {
            notif('2');
            redirect(site_url('calon'));
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
		'full_name' => $this->input->post('full_name',TRUE),
		'arahan_pimpinan' => $this->input->post('arahan_pimpinan',TRUE),
		'status_calon_rekomjak' => $this->input->post('status_calon_rekomjak',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'created_date' => $this->input->post('created_date',TRUE),
		'modified_by' => $this->input->post('modified_by',TRUE),
		'modified_date' => $this->input->post('modified_date',TRUE),
	    );

            $this->Calon_model->update($this->input->post('', TRUE), $data);
            notif('1');
            redirect(site_url('calon'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Calon_model->get_by_id($id);

        if ($row) {
            $this->Calon_model->delete($id);
            notif('3');
            redirect(site_url('calon'));
        } else {
            notif('2');
            redirect(site_url('calon'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_usulan', 'kode usulan', 'trim|required');
	$this->form_validation->set_rules('id_calon_rekomjak', 'id calon rekomjak', 'trim|required');
	$this->form_validation->set_rules('full_name', 'full name', 'trim|required');
	$this->form_validation->set_rules('arahan_pimpinan', 'arahan pimpinan', 'trim|required');
	$this->form_validation->set_rules('status_calon_rekomjak', 'status calon rekomjak', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('created_date', 'created date', 'trim|required');
	$this->form_validation->set_rules('modified_by', 'modified by', 'trim|required');
	$this->form_validation->set_rules('modified_date', 'modified date', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Calon.php */
/* Location: ./application/controllers/Calon.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-09 09:55:22 */
/* http://harviacode.com */