<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA T_UNIT_UTAMA</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Nama Unit Utama </td><td><input type="text" class="form-control" name="nama_unit_utama" id="nama_unit_utama" placeholder="Nama Unit Utama" value="<?php echo $nama_unit_utama; ?>" /> <?php echo form_error('nama_unit_utama') ?></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_unit_utama" value="<?php echo $id_unit_utama; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('unit_utama') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>