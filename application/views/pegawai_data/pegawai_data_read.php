
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA PEGAWAI</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Nama</td>
				<td><?php echo $nama; ?></td>
			</tr>
	
			<tr>
				<td>Nip</td>
				<td><?php echo $nip; ?></td>
			</tr>
	
			<tr>
				<td>Golongan</td>
				<td><?php echo $golongan; ?></td>
			</tr>
	
			<tr>
				<td>Jabatan</td>
				<td><?php echo $jabatan; ?></td>
			</tr>
	
			<tr>
				<td>Nik</td>
				<td><?php echo $nik; ?></td>
			</tr>
	
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $tempat_lahir; ?></td>
			</tr>
	
			<tr>
				<td>Tgl Lahir</td>
				<td><?php echo $tgl_lahir; ?></td>
			</tr>
	
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $jenis_kelamin; ?></td>
			</tr>
	
			<tr>
				<td>Alamat</td>
				<td><?php echo $alamat; ?></td>
			</tr>
	
			<tr>
				<td>Telp</td>
				<td><?php echo $telp; ?></td>
			</tr>
	
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
	
			<tr>
				<td>Status Menikah</td>
				<td><?php echo $status_menikah; ?></td>
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
				<td></td>
				<td><a href="<?php echo site_url('pegawai_data') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>