<script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/dataTables/dataTables.bootstrap.js"></script>

<script src="<?php echo base_url(); ?>js/sb-admin-2.js"></script>
<script>

$(document).ready(function () {
    $('#income .input-group.date').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true
    });
    $('#expense .input-group.date').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true
    });
});
</script>