
<div class="content-wrapper">
	
	<section class="content">
		<div class="row">
		<div class="col-md-6">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA USULAN</h3>
			</div>
		
		<table class='table table-bordered'>        
	
			<tr>
				<td>Kode Usulan</td>
				<td><?php echo $kode_usulan; ?></td>
			</tr>
	
			<tr>
				<td>Satuan Kerja</td>
				<td><?php echo $Satuan_Kerja; ?></td>
			</tr>
	
			<tr>
				<td>Nama Pengusul</td>
				<td><?php echo $nama_pengusul; ?></td>
			</tr>
	
			<tr>
				<td>Jabatan Pengusul</td>
				<td><?php echo $jabatan_pengusul; ?></td>
			</tr>
	
			<tr>
				<td>Surat Usulan</td>
				<td><?php echo download($surat_usulan); ?></td>
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
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
	
			<tr>
				<td>Status Usulan</td>
				<td><?php echo status($status_usulan); ?></td>
			</tr>
	
			
	
		</table>
		</div>
		
	
		</div>
		<div class="col-md-5">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"> Disposisi</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>

					<tr>
						<td width='200'>Tujuan Disposisi</td><td><?php echo cmb_diwherebulan('tujuandp', 'v_pegawai', 'nama','id_users','','', 'Masukan nama pegawai ...') ?> <?php echo form_error('tujuandp') ?></td>
					</tr>

					<tr>
						<td width='200'>Arahan Pimpinan </td><td><input type="text" class="form-control" name="arahan" id="arahan" placeholder="Arahan" value="<?php echo $arahan; ?>" /> <?php echo form_error('arahan') ?></td>
					</tr>
	
					
		
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_usulan" value="<?php echo $id_usulan; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('usulan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
		</div>
	</div>
	</section>

</div>