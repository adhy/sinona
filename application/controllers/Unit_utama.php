<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Unit_utama extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Unit_utama_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','unit_utama/t_unit_utama_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Unit_utama_model->json();
    }

    public function read($id) 
    {
        $row = $this->Unit_utama_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_unit_utama' => $row->id_unit_utama,
		'nama_unit_utama' => $row->nama_unit_utama,
	    );
            $this->template->load('template','unit_utama/t_unit_utama_read', $data);
        } else {
            notif('2');
            redirect(site_url('unit_utama'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('unit_utama/create_action'),
	    'id_unit_utama' => set_value('id_unit_utama'),
	    'nama_unit_utama' => set_value('nama_unit_utama'),
	);
        $this->template->load('template','unit_utama/t_unit_utama_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_unit_utama' => $this->input->post('nama_unit_utama',TRUE),
	    );

            $this->Unit_utama_model->insert($data);
            notif('0');
            redirect(site_url('unit_utama'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Unit_utama_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbaharui',
                'action' => site_url('unit_utama/update_action'),
		'id_unit_utama' => set_value('id_unit_utama', $row->id_unit_utama),
		'nama_unit_utama' => set_value('nama_unit_utama', $row->nama_unit_utama),
	    );
            $this->template->load('template','unit_utama/t_unit_utama_form', $data);
        } else {
            notif('2');
            redirect(site_url('unit_utama'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_unit_utama', TRUE));
        } else {
            $data = array(
		'nama_unit_utama' => $this->input->post('nama_unit_utama',TRUE),
	    );

            $this->Unit_utama_model->update($this->input->post('id_unit_utama', TRUE), $data);
            notif('1');
            redirect(site_url('unit_utama'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Unit_utama_model->get_by_id($id);

        if ($row) {
            $this->Unit_utama_model->delete($id);
            notif('3');
            redirect(site_url('unit_utama'));
        } else {
            notif('2');
            redirect(site_url('unit_utama'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_unit_utama', 'nama unit utama', 'trim|required');

	$this->form_validation->set_rules('id_unit_utama', 'id_unit_utama', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Unit_utama.php */
/* Location: ./application/controllers/Unit_utama.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-09 09:13:14 */
/* http://harviacode.com */