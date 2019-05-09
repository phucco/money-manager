<?php if ( ! empty($this->session->flashdata('message'))) : 
	$type_message = $this->session->flashdata('type');
	$message = $this->session->flashdata('message'); ?>

	<div class="alert alert-<?php echo $type_message; ?> alert-dismissable">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<?php echo $message; ?>
	</div>
<?php endif; ?>


