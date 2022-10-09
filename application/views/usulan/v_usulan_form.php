<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA V_USULAN</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
				<tr>
						<td width='200'>Satuan Kerja </td>
						<td> <textarea class="form-control" rows="3" name="Satuan_Kerja" id="Satuan_Kerja" placeholder="Satuan Kerja"><?php echo $Satuan_Kerja; ?></textarea> <?php echo form_error('Satuan_Kerja') ?></td>
					</tr>
					<tr>
						<td width='200'>Kode Usulan </td><td><input type="text" class="form-control" name="kode_usulan" id="kode_usulan" placeholder="Kode Usulan" value="<?php echo $kode_usulan; ?>" /> <?php echo form_error('kode_usulan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Nama Pengusul </td><td><input type="text" class="form-control" name="nama_pengusul" id="nama_pengusul" placeholder="Nama Pengusul" value="<?php echo $nama_pengusul; ?>" /> <?php echo form_error('nama_pengusul') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Jabatan Pengusul </td><td><input type="text" class="form-control" name="jabatan_pengusul" id="jabatan_pengusul" placeholder="Jabatan Pengusul" value="<?php echo $jabatan_pengusul; ?>" /> <?php echo form_error('jabatan_pengusul') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Surat Usulan </td><td><input type="text" class="form-control" name="surat_usulan" id="surat_usulan" placeholder="Surat Usulan" value="<?php echo $surat_usulan; ?>" /> <?php echo form_error('surat_usulan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Tahun Usulan </td><td><input type="text" class="form-control" name="tahun_usulan" id="tahun_usulan" placeholder="Tahun Usulan" value="<?php echo $tahun_usulan; ?>" /> <?php echo form_error('tahun_usulan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Latar Belakang </td><td><input type="text" class="form-control" name="latar_belakang" id="latar_belakang" placeholder="Latar Belakang" value="<?php echo $latar_belakang; ?>" /> <?php echo form_error('latar_belakang') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Identifikasi Masalah </td><td><input type="text" class="form-control" name="identifikasi_masalah" id="identifikasi_masalah" placeholder="Identifikasi Masalah" value="<?php echo $identifikasi_masalah; ?>" /> <?php echo form_error('identifikasi_masalah') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Tujuan </td><td><input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo $tujuan; ?>" /> <?php echo form_error('tujuan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Catatan </td><td><input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" value="<?php echo $catatan; ?>" /> <?php echo form_error('catatan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Telepon </td><td><input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" /> <?php echo form_error('telepon') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Email </td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /> <?php echo form_error('email') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Status Usulan </td><td><input type="text" class="form-control" name="status_usulan" id="status_usulan" placeholder="Status Usulan" value="<?php echo $status_usulan; ?>" /> <?php echo form_error('status_usulan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Created By </td><td><input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" /> <?php echo form_error('created_by') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Created Date </td><td><input type="text" class="form-control" name="created_date" id="created_date" placeholder="Created Date" value="<?php echo $created_date; ?>" /> <?php echo form_error('created_date') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Modified By </td><td><input type="text" class="form-control" name="modified_by" id="modified_by" placeholder="Modified By" value="<?php echo $modified_by; ?>" /> <?php echo form_error('modified_by') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Modified Date </td><td><input type="text" class="form-control" name="modified_date" id="modified_date" placeholder="Modified Date" value="<?php echo $modified_date; ?>" /> <?php echo form_error('modified_date') ?></td>
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
	</section>
</div>