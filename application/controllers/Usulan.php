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
        $iduser=$this->session->userdata('id_users');
        $iduserlevel=$this->session->userdata('id_user_level');
        header('Content-Type: application/json');
        echo $this->Usulan_model->json($iduser,$iduserlevel);
    }

    public function read($id) 
    {
		$ses_data['id_usulan']      = $id;
		$this->session->set_userdata($ses_data);
        $row = $this->Usulan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_usulan' => $row->id_usulan,
		'kode_usulan' => $row->kode_usulan,
		'Satuan_Kerja' => $row->Satuan_Kerja,
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
		'button' => 'Kirim',
                'action' => site_url('usulan/create_action'),
		'id_usulan' => set_value('id_usulan', $row->id_usulan),
		'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
		'tujuandp' => set_value('tujuandp', $row->id_user),
		'arahan' => set_value('arahan', $row->arahan_pimpinan),
		'statuscr' => set_value('statuscr', $row->status_calon_rekomjak),
	    );
        $datausulan=array(
            'status_usulan'=>'1'
        );
            $this->Usulan_model->updateusulan($id, $datausulan);
            $this->template->load('template','usulan/v_usulan_read', $data);
        } else {
            notif('2');
            redirect(site_url('usulan'));
        }
    }

    // public function create() 
    // {
    //     $data = array(
    //         'button' => 'Simpan',
    //         'action' => site_url('usulan/create_action'),
	//     'id_usulan' => set_value('id_usulan'),
	//     'kode_usulan' => set_value('kode_usulan'),
	//     'Satuan_Kerja' => set_value('Satuan_Kerja'),
	//     'nama_pengusul' => set_value('nama_pengusul'),
	//     'jabatan_pengusul' => set_value('jabatan_pengusul'),
	//     'surat_usulan' => set_value('surat_usulan'),
	//     'tahun_usulan' => set_value('tahun_usulan'),
	//     'latar_belakang' => set_value('latar_belakang'),
	//     'identifikasi_masalah' => set_value('identifikasi_masalah'),
	//     'tujuan' => set_value('tujuan'),
	//     'catatan' => set_value('catatan'),
	//     'telepon' => set_value('telepon'),
	//     'email' => set_value('email'),
	//     'status_usulan' => set_value('status_usulan'),
	//     'created_by' => set_value('created_by'),
	//     'created_date' => set_value('created_date'),
	//     'modified_by' => set_value('modified_by'),
	//     'modified_date' => set_value('modified_date'),
	// );
    //     $this->template->load('template','usulan/v_usulan_form', $data);
    // }
    
    public function create_action() 
    {
        $this->_rules();
		$idusulan=$this->session->userdata('id_usulan');
        if ($this->form_validation->run() == FALSE) {
            $this->read($idusulan);
        } else {
            $data = array(
		'id_usulan' => $idusulan,
		'id_user' => $this->input->post('tujuandp',TRUE),
		'status_calon_rekomjak' => '1',
		'arahan_pimpinan' => $this->input->post('arahan',TRUE),
		
	    );
        $datausulan=array(
            'status_usulan'=>'2'
        );
            $this->Usulan_model->insert($data);
            $this->Usulan_model->updateusulan($idusulan, $datausulan);
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
		'id_usulan' => set_value('id_usulan', $row->id_usulan),
		'kode_usulan' => set_value('kode_usulan', $row->kode_usulan),
		'tujuan' => set_value('tujuan', $row->tujuan),
		'tujuandp' => set_value('tujuandp', $row->id_user),
		'arahan' => set_value('arahan', $row->arahan_pimpinan),
		'statuscr' => set_value('statuscr', $row->status_calon_rekomjak),
	    );
            $this->template->load('template','usulan/v_usulan_dispo', $data);
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
		'id_usulan' => $this->input->post('id_usulan',TRUE),
		'tujuandp' => $this->input->post('tujuan',TRUE),
		'arahan' => $this->input->post('arahan',TRUE),
	    );

            $this->Usulan_model->update($this->input->post('id_usulan', TRUE), $data);
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
	$this->form_validation->set_rules('tujuandp', 'tujuan disposisi', 'trim|required');
	$this->form_validation->set_rules('arahan', 'arahan', 'trim|required');

	$this->form_validation->set_error_delimiters('<div class="has-error"><label class="text-danger"><i class="fa fa-times-circle-o"></i> ', '</label></div>');
    }

}

/* End of file Usulan.php */
/* Location: ./application/controllers/Usulan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-10-13 14:21:17 */
/* http://harviacode.com */