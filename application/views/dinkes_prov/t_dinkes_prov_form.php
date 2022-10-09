<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA DINKES PROV</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Nama Dinkes Prov </td><td><input type="text" class="form-control" name="nama_dinkes_prov" id="nama_dinkes_prov" placeholder="Nama Dinkes Prov" value="<?php echo $nama_dinkes_prov; ?>" /> <?php echo form_error('nama_dinkes_prov') ?></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_dinkes_prov" value="<?php echo $id_dinkes_prov; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('dinkes_prov') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>