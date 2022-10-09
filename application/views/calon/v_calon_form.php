<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA V_CALON</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Kode Usulan </td><td><input type="text" class="form-control" name="kode_usulan" id="kode_usulan" placeholder="Kode Usulan" value="<?php echo $kode_usulan; ?>" /> <?php echo form_error('kode_usulan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Full Name </td><td><input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value="<?php echo $full_name; ?>" /> <?php echo form_error('full_name') ?></td>
					</tr>
	    
					<tr>
						<td width='200'>Arahan Pimpinan </td>
						<td> <textarea class="form-control" rows="3" name="arahan_pimpinan" id="arahan_pimpinan" placeholder="Arahan Pimpinan"><?php echo $arahan_pimpinan; ?></textarea> <?php echo form_error('arahan_pimpinan') ?></td>
					</tr>
	
					<tr>
						<td width='200'>Status Calon Rekomjak </td><td><input type="text" class="form-control" name="status_calon_rekomjak" id="status_calon_rekomjak" placeholder="Status Calon Rekomjak" value="<?php echo $status_calon_rekomjak; ?>" /> <?php echo form_error('status_calon_rekomjak') ?></td>
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
							<input type="hidden" name="id_calon_rekomjak" value="<?php echo $id_calon_rekomjak; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('calon') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>