<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA V_TIMREKOM</h3>
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
						<td width='200'>Jabatan Tim </td><td><input type="text" class="form-control" name="jabatan_tim" id="jabatan_tim" placeholder="Jabatan Tim" value="<?php echo $jabatan_tim; ?>" /> <?php echo form_error('jabatan_tim') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Kode Usulan </td><td><input type="text" class="form-control" name="kode_usulan" id="kode_usulan" placeholder="Kode Usulan" value="<?php echo $kode_usulan; ?>" /> <?php echo form_error('kode_usulan') ?></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_tim_rekomjak" value="<?php echo $id_tim_rekomjak; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('timrekom') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>