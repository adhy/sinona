<?php
function cmb_dinamis($name,$table,$field,$pk,$selected=null,$order=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control'>";
    if($order){
        $ci->db->order_by($field,$order);
    }
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}
function dispotombol($string,$status=null){
    if($status>1){$string='<p class="text-red">Sudah Disposisi</p>';}else{$string=anchor(site_url('usulan/read/'.$string.''),'<i class="fa fa-send" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm'));}
    return $string;
}
function cmb_diwherebulan($name,$table,$field,$pk,$selected=null,$order=null,$where=null,$placeholder=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control select2' data-placeholder='$placeholder'><option></option>";
    if($order){
        $ci->db->order_by($field,$order);
    }
    $data = $ci->db->get_where($table,$where)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">". $d->$field."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}
function cmb_di($name,$table,$field,$pk,$selected=null,$order=null,$placeholder=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control select2' data-placeholder='$placeholder'><option></option>";
    if($order){
        $ci->db->order_by($field,$order);
    }
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">". $d->$field."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

function download($string){
    $string=anchor(site_url('assets/doc_surat/'.$string.''),'<i class="fa fa-file-pdf-o fa-2x pr-1" aria-hidden="true"></i>Unduh');
    return $string;
}
function select2_dinamis($name,$table,$field,$placeholder){
    $ci = get_instance();
    $select2 = '<select name="'.$name.'" class="form-control select2 select2-hidden-accessible" multiple="" 
               data-placeholder="'.$placeholder.'" style="width: 100%;" tabindex="-1" aria-hidden="true">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $select2.= ' <option>'.$row->$field.'</option>';
    }
    $select2 .='</select>';
    return $select2;
}
function disposisi($string){
    if(empty($string)){$string='<span class="label label-warning">Belum ada disposisi</span>';}
    return $string;
    }
function notif($data){
    $ci = get_instance();
    switch ($data){
        case 0:
            return $data= $ci->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Tambah Data Berhasil</div>');
            break;
        case 1:
            return $data= $ci->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Perbaharui Data Berhasil</div>');
            break;
        case 2:
            return $data=$ci->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Record Not Found</div>');
            break;
        case 3:
            return $data=$ci->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Hapus Data Berhasil</div>');
            break;
    }
}
function status($data){
    $ci = get_instance();
    switch ($data){
        case 0:
            return $data= '<span class="label label-info">Usulan Baru</span>';
            break;
        case 1:
            return $data= '<span class="label label-success">Sudah di baca</span>';
            break;
        case 2:
            return $data= '<span class="label label-warning">DiTindak Lanjut</span>';
            break;
        case 99:
            return $data= '<span class="label label-danger">Usulan Ditolak</span>';
            break;
    }
}
function statuscr($data){
    $ci = get_instance();
    switch ($data){
        case 1:
            return $data= '<span class="label label-success">Penyusunan</span>';
            break;
        case 2:
            return $data= '<span class="label label-warning">DiTindak Lanjut</span>';
            break;
        case 99:
            return $data= '<span class="label label-danger">Ditolak</span>';
            break;
    }
}

function helpjab($data){
    $ci = get_instance();
    switch ($data){
        case 0:
            return $data= 'Ketua';
            break;
        case 1:
            return $data= 'Wakil Ketua';
            break;
        case 2:
            return $data= 'Sekretaris';
            break;
        case 3:
            return $data= 'Anggota';
            break;
    }
}

function datalist_dinamis($name,$table,$field,$value=null){
    $ci = get_instance();
    $string = '<input value="'.$value.'" name="'.$name.'" list="'.$name.'" class="form-control">
    <datalist id="'.$name.'">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $string.='<option value="'.$row->$field.'">';
    }
    $string .='</datalist>';
    return $string;
}

function rename_string_is_aktif($string){
        return $string=='y'?'Aktif':'Tidak Aktif';
    }
    

function is_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('id_users')){
        redirect('auth');
    }else{
        $modul = $ci->uri->segment(1);
        
        $id_user_level = $ci->session->userdata('id_user_level');
        // dapatkan id menu berdasarkan nama controller
        $menu = $ci->db->get_where('tbl_menu',array('url'=>$modul))->row_array();
        $id_menu = $menu['id_menu'];
        // chek apakah user ini boleh mengakses modul ini
        $hak_akses = $ci->db->get_where('tbl_hak_akses',array('id_menu'=>$id_menu,'id_user_level'=>$id_user_level));
        if($hak_akses->num_rows()<1){
            redirect('blokir');
            exit;
        }
    }
}

function alert($class,$title,$description){
    return '<div class="alert '.$class.' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> '.$title.'</h4>
                '.$description.'
              </div>';
}

// untuk chek akses level pada modul peberian akses
function checked_akses($id_user_level,$id_menu){
    $ci = get_instance();
    $ci->db->where('id_user_level',$id_user_level);
    $ci->db->where('id_menu',$id_menu);
    $data = $ci->db->get('tbl_hak_akses');
    if($data->num_rows()>0){
        return "checked='checked'";
    }
}


function autocomplate_json($table,$field){
    $ci = get_instance();
    $ci->db->like($field, $_GET['term']);
    $ci->db->select($field);
    $collections = $ci->db->get($table)->result();
    foreach ($collections as $collection) {
        $return_arr[] = $collection->$field;
    }
    echo json_encode($return_arr);
}
