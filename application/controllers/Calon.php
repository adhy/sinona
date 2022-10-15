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
        $iduser=$idusulan=$this->session->userdata('id_user');
        header('Content-Type: application/json');
        echo $this->Calon_model->json($iduser);
    }
    public function timnya() {
        $calon=$idusulan=$this->session->userdata('id_usulan');
        header('Content-Type: application/json');
        echo $this->Calon_model->timnya($calon);
    }

    public function read($id) 
    {	$ses_data['id_usulan']      = $id;
		$this->session->set_userdata($ses_data);
        $row = $this->Calon_model->get_by_id($id);
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
		'button' => 'Buat',
                'action' => site_url('calon/create_action'),
		'id_usulan' => set_value('id_usulan', $row->id_usulan),
		'namatim' => set_value('namatim', $row->id_user),
		'jabatan' => set_value('arahan', $row->jabatan),
	    );
            $this->template->load('template','calon/v_calon_read', $data);
        } else {
            notif('2');
            redirect(site_url('calon'));
        }
    }

    // public function create() 
    // {
    //     $data = array(
    //         'button' => 'Simpan',
    //         'action' => site_url('calon/create_action'),
	//     'kode_usulan' => set_value('kode_usulan'),
	//     'id_calon_rekomjak' => set_value('id_calon_rekomjak'),
	//     'nama' => set_value('nama'),
	//     'arahan_pimpinan' => set_value('arahan_pimpinan'),
	//     'status_calon_rekomjak' => set_value('status_calon_rekomjak'),
	//     'created_by' => set_value('created_by'),
	//     'created_date' => set_value('created_date'),
	//     'modified_by' => set_value('modified_by'),
	//     'modified_date' => set_value('modified_date'),
	//     'nama_pengusul' => set_value('nama_pengusul'),
	//     'surat_usulan' => set_value('surat_usulan'),
	//     'tahun_usulan' => set_value('tahun_usulan'),
	//     'latar_belakang' => set_value('latar_belakang'),
	//     'identifikasi_masalah' => set_value('identifikasi_masalah'),
	//     'tujuan' => set_value('tujuan'),
	//     'catatan' => set_value('catatan'),
	//     'telepon' => set_value('telepon'),
	//     'status_usulan' => set_value('status_usulan'),
	// );
    //     $this->template->load('template','calon/v_calon_form', $data);
    // }
    
    public function create_action() 
    {	
        $this->_rules();
		$idusulan=$this->session->userdata('id_usulan');
        if ($this->form_validation->run() == FALSE) {
			
            $this->read($idusulan);
        } else {
            $data = array(
		'id_calon_rekomjak' => $this->session->userdata('id_calrekom'),
		'id_user' => $this->input->post('nama',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
	    );

            $this->Calon_model->insert($data);
            notif('0');
            redirect(site_url('calon/read/'.$idusulan.''));
        }
    }
    
    // public function update($id) 
    // {
    //     $row = $this->Calon_model->get_by_id($id);

    //     if ($row) {
    //         $data = array(
    //             'button' => 'Perbaharui',
    //             'action' => site_url('calon/update_action'),
	// 	'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
	// 	'id_calon_rekomjak' => set_value('id_calon_rekomjak', $row->id_calon_rekomjak),
	// 	'nama' => set_value('nama', $row->nama),
	// 	'arahan_pimpinan' => set_value('arahan_pimpinan', $row->arahan_pimpinan),
	// 	'status_calon_rekomjak' => set_value('status_calon_rekomjak', $row->status_calon_rekomjak),
	// 	'created_by' => set_value('created_by', $row->created_by),
	// 	'created_date' => set_value('created_date', $row->created_date),
	// 	'modified_by' => set_value('modified_by', $row->modified_by),
	// 	'modified_date' => set_value('modified_date', $row->modified_date),
	// 	'nama_pengusul' => set_value('nama_pengusul', $row->nama_pengusul),
	// 	'surat_usulan' => set_value('surat_usulan', $row->surat_usulan),
	// 	'tahun_usulan' => set_value('tahun_usulan', $row->tahun_usulan),
	// 	'latar_belakang' => set_value('latar_belakang', $row->latar_belakang),
	// 	'identifikasi_masalah' => set_value('identifikasi_masalah', $row->identifikasi_masalah),
	// 	'tujuan' => set_value('tujuan', $row->tujuan),
	// 	'catatan' => set_value('catatan', $row->catatan),
	// 	'telepon' => set_value('telepon', $row->telepon),
	// 	'status_usulan' => set_value('status_usulan', $row->status_usulan),
	//     );
    //         $this->template->load('template','calon/v_calon_form', $data);
    //     } else {
    //         notif('2');
    //         redirect(site_url('calon'));
    //     }
    // }
    
    // public function update_action() 
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->update($this->input->post('', TRUE));
    //     } else {
    //         $data = array(
	// 	'kode_usulan' => $this->input->post('kode_usulan',TRUE),
	// 	'id_calon_rekomjak' => $this->input->post('id_calon_rekomjak',TRUE),
	// 	'nama' => $this->input->post('nama',TRUE),
	// 	'arahan_pimpinan' => $this->input->post('arahan_pimpinan',TRUE),
	// 	'status_calon_rekomjak' => $this->input->post('status_calon_rekomjak',TRUE),
	// 	'created_by' => $this->input->post('created_by',TRUE),
	// 	'created_date' => $this->input->post('created_date',TRUE),
	// 	'modified_by' => $this->input->post('modified_by',TRUE),
	// 	'modified_date' => $this->input->post('modified_date',TRUE),
	// 	'nama_pengusul' => $this->input->post('nama_pengusul',TRUE),
	// 	'surat_usulan' => $this->input->post('surat_usulan',TRUE),
	// 	'tahun_usulan' => $this->input->post('tahun_usulan',TRUE),
	// 	'latar_belakang' => $this->input->post('latar_belakang',TRUE),
	// 	'identifikasi_masalah' => $this->input->post('identifikasi_masalah',TRUE),
	// 	'tujuan' => $this->input->post('tujuan',TRUE),
	// 	'catatan' => $this->input->post('catatan',TRUE),
	// 	'telepon' => $this->input->post('telepon',TRUE),
	// 	'status_usulan' => $this->input->post('status_usulan',TRUE),
	//     );

    //         $this->Calon_model->update($this->input->post('', TRUE), $data);
    //         notif('1');
    //         redirect(site_url('calon'));
    //     }
    // }
    
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
    public function del($id) 
    {
        $row = $this->Calon_model->get_by_idtim($id);
		$idusulan=$this->session->userdata('id_usulan');
        if ($row) {
            $this->Calon_model->del($id);
            redirect(site_url('calon/read/'.$idusulan.''));
        } else {
            redirect(site_url('calon/read/'.$idusulan.''));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('idcal', 'idcal', 'trim');
	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Calon.php */
/* Location: ./application/controllers/Calon.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-14 08:41:55 */
/* http://harviacode.com */