<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA T_DINKES_KAB</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Nama Dinkes Kab </td><td><input type="text" class="form-control" name="nama_dinkes_kab" id="nama_dinkes_kab" placeholder="Nama Dinkes Kab" value="<?php echo $nama_dinkes_kab; ?>" /> <?php echo form_error('nama_dinkes_kab') ?></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_dinkes_kab" value="<?php echo $id_dinkes_kab; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('dinkes_kab') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>