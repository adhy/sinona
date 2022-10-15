<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA USULAN</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Kode Usulan </td><td><span><?php echo $kode_usulan; ?> </span></td>
					</tr>

					<tr>
						<td width='200'>Tujuan Usulan</td><td><span><?php echo $tujuan; ?></span></td>
					</tr>
					<tr>
						<td width='200'>Tujuan Disposisi</td><td><?php echo select2_dinamis('tujuan', 'pegawai_data', 'nama', 'Masukan keyword ...') ?> <?php echo form_error('tujuan') ?></td>
					</tr>

					<tr>
						<td width='200'>Arahan Pimpinan </td><td><input type="text" class="form-control" name="arahan" id="arahan" placeholder="Satuan Kerja" value="<?php echo $arahan; ?>" /> <?php echo form_error('arahan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Status Calon Rekomjak </td><td><input type="text" class="form-control" name="statuscr" id="statuscr" placeholder="Jabatan Pengusul" value="<?php echo $statuscr; ?>" /> <?php echo form_error('statuscr') ?></td>
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