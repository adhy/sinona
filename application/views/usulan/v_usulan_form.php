<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA V_USULAN</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Id Instansi Lembaga </td><td><input type="text" class="form-control" name="id_instansi_lembaga" id="id_instansi_lembaga" placeholder="Id Instansi Lembaga" value="<?php echo $id_instansi_lembaga; ?>" /> <?php echo form_error('id_instansi_lembaga') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Nama Instansi Lembaga </td><td><input type="text" class="form-control" name="nama_instansi_lembaga" id="nama_instansi_lembaga" placeholder="Nama Instansi Lembaga" value="<?php echo $nama_instansi_lembaga; ?>" /> <?php echo form_error('nama_instansi_lembaga') ?></td>
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