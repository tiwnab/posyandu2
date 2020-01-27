<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('mm/dd/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask();

    $(function () {
        $("#example1").DataTable();
        $('.dataTables_filter').addClass('pull-right');
    });

    $(function () {
        $("#example2").DataTable();
        $('.dataTables_filter').addClass('pull-right');
    });



    $( "#datemask" ).datepicker({
        dateFormat: "mm/dd/yyyy",
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true
    });
    $("#datemask").datepicker();

    function getNoKK(e){
        var id = e.split('_');
        $('#no_kk').val(id[1]);
        $('#id_balita').val(id[0]);
        $('#search-kk').modal('toggle');
    }

    function getIdImunisasi(e) {
        $('#id_imunisasi').val(e);
        $('#search-imunisasi').modal('toggle');
    }
</script>