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


    $( "#datemask" ).datepicker({
        dateFormat: "mm/dd/yyyy",
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true
    });
    $("#datemask").datepicker();

    $(document).ready(function() {
        $('#view-ortu').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget);// Tombol dimana modal di tampilkan
            var modal          = $(this);
            var content;

            // Isi nilai pada field
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url();?>kms/getorangtua/" + div.data('id'),
                success: function(data){
                    var res = JSON.parse(data);
                    var dt_birth = new Date(res['tgl_lahir']);
                    var dt_now = new Date();
                    modal.find("#nama_ayah").html(res['nama_ayah']);
                    modal.find("#nama_ibu").html(res['nama_ibu']);
                    modal.find("#rt_rw").html(res['rt_rw']);
                    modal.find("#no_hp").html(res['no_hp']);
                    modal.find("#kb").html(res['kb']);
                }
            });
        });
    });
</script>