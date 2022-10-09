<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA T_SATUAN_KERJA</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Id Unit Utama </td><td><input type="text" class="form-control" name="id_unit_utama" id="id_unit_utama" placeholder="Id Unit Utama" value="<?php echo $id_unit_utama; ?>" /> <?php echo form_error('id_unit_utama') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Nama Satuan Kerja </td><td><input type="text" class="form-control" name="nama_satuan_kerja" id="nama_satuan_kerja" placeholder="Nama Satuan Kerja" value="<?php echo $nama_satuan_kerja; ?>" /> <?php echo form_error('nama_satuan_kerja') ?></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_satuan_kerja" value="<?php echo $id_satuan_kerja; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('satuan_kerja') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>