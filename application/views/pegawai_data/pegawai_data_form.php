<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA PEGAWAI</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Nama </td><td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" /> <?php echo form_error('nama') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Nip </td><td><input type="text" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $nip; ?>" /> <?php echo form_error('nip') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Golongan </td><td><input type="text" class="form-control" name="golongan" id="golongan" placeholder="Golongan" value="<?php echo $golongan; ?>" /> <?php echo form_error('golongan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Jabatan </td><td><input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" /> <?php echo form_error('jabatan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Nik </td><td><input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" /> <?php echo form_error('nik') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Tempat Lahir </td><td><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" /> <?php echo form_error('tempat_lahir') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Tgl Lahir </td>
						<td><input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /> <?php echo form_error('tgl_lahir') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Jenis Kelamin </td><td><input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" /> <?php echo form_error('jenis_kelamin') ?></td>
					</tr>
	    
					<tr>
						<td width='200'>Alamat </td>
						<td> <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea> <?php echo form_error('alamat') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Telp </td><td><input type="text" class="form-control" name="telp" id="telp" placeholder="Telp" value="<?php echo $telp; ?>" /> <?php echo form_error('telp') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Email </td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /> <?php echo form_error('email') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Status Menikah </td><td><input type="text" class="form-control" name="status_menikah" id="status_menikah" placeholder="Status Menikah" value="<?php echo $status_menikah; ?>" /> <?php echo form_error('status_menikah') ?></td>
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
							<input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('pegawai_data') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>