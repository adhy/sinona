
<div class="content-wrapper">
	
	<section class="content">
	<div class="row">
		<div class="col-md-7">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA CALON</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Kode Usulan</td>
				<td><?php echo $kode_usulan; ?></td>
			</tr>
	
			<tr>
				<td>Id Calon Rekomjak</td>
				<td><?php echo $id_calon_rekomjak; ?></td>
			</tr>
	
			<tr>
				<td>Ketua</td>
				<td><?php echo $nama; ?></td>
			</tr>
	
			<tr>
				<td>Arahan Pimpinan</td>
				<td><?php echo $arahan_pimpinan; ?></td>
			</tr>
	
			<tr>
				<td>Status Calon Rekomjak</td>
				<td><?php echo $status_calon_rekomjak; ?></td>
			</tr>
	
			<tr>
				<td>Created By</td>
				<td><?php echo $created_by; ?></td>
			</tr>
	
			<tr>
				<td>Created Date</td>
				<td><?php echo $created_date; ?></td>
			</tr>
	
			<tr>
				<td>Modified By</td>
				<td><?php echo $modified_by; ?></td>
			</tr>
	
			<tr>
				<td>Modified Date</td>
				<td><?php echo $modified_date; ?></td>
			</tr>
	
			<tr>
				<td>Nama Pengusul</td>
				<td><?php echo $nama_pengusul; ?></td>
			</tr>
	
			<tr>
				<td>Surat Usulan</td>
				<td><?php echo $surat_usulan; ?></td>
			</tr>
	
			<tr>
				<td>Tahun Usulan</td>
				<td><?php echo $tahun_usulan; ?></td>
			</tr>
	
			<tr>
				<td>Latar Belakang</td>
				<td><?php echo $latar_belakang; ?></td>
			</tr>
	
			<tr>
				<td>Identifikasi Masalah</td>
				<td><?php echo $identifikasi_masalah; ?></td>
			</tr>
	
			<tr>
				<td>Tujuan</td>
				<td><?php echo $tujuan; ?></td>
			</tr>
	
			<tr>
				<td>Catatan</td>
				<td><?php echo $catatan; ?></td>
			</tr>
	
			<tr>
				<td>Telepon</td>
				<td><?php echo $telepon; ?></td>
			</tr>
	
			<tr>
				<td>Status Usulan</td>
				<td><?php echo $status_usulan; ?></td>
			</tr>
	
			
	
		</table>
		</div>
		</div>
		<div class="col-md-5">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"> Tim Rekomjak</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
					<?php 
					$ses_data['id_calrekom']      = $id_calon_rekomjak;
					$this->session->set_userdata($ses_data);
					?>
				
					<tr>
						<td width='200'>Nama</td><td><?php echo cmb_diwherebulan('nama', 'v_pegawai', 'nama','id_users','','', 'Masukan nama pegawai ...') ?> <?php echo form_error('nama') ?></td>
					</tr>

					<tr>
					<td width='200'>Jabatan</td><td>
					<select class="form-control" name="jabatan">
						<option value='0'>Ketua</option>
						<option value='1'>Wakil Ketua</option>
						<option value='2'>Sekretaris</option>
						<option value='3'>Anggota</option>
					</select>
					
					<?php echo form_error('jabatan') ?></td>
					</tr>
	
					
		
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_usulan" value="<?php echo $id_usulan; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('calon') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
		</div>
		<div class="col-md-5">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"> Daftar Tim Rekomjak</h3>
			</div>
			
			<table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="30px">No</th>
		    <th>Nama</th>
            <th>Jabatan</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
		</div>
		</div>
</div>
	</section>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <h4 class="modal-title" id="deleteModalLabel">Delete Confirmation</h4>

                    </div>

                    <div class="modal-body">

                        Apa anda yakin akan menghapus data ?

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>

                        <a class="btn btn-danger btn-ok" id="delete-confirmation"><i class="fa fa-save"></i> Ya</a>

                    </div>

                </div>

            </div>
    </div>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "<?=base_url()?>calon/timnya", "type": "POST"},
                    columns: [
                        {
                            "data": "id_calon_rekomjak",
                            "orderable": false
                        },{"data": "nama", "orderable": false,},{"data": "jabatan", "orderable": false,},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
					ordering: false,
					searching: false,
					paging: false,
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>