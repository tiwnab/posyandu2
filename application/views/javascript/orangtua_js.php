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
        $('#view-balita').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget);// Tombol dimana modal di tampilkan
            var modal          = $(this);
            var content;

            // Isi nilai pada field
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url().$this->session->userdata('role');?>/orangtua/getbalita/" + div.data('id'),
                success: function(data){
                    var res = JSON.parse(data);
                    var dt_birth = new Date(res['tgl_lahir']);
                    var dt_now = new Date();
                    modal.find("#nama_balita").html(res['nama']);
                    modal.find("#tgl_lahir").html(res['tgl_lahir']);
                    modal.find("#umur").html(monthDiff(dt_birth, dt_now) + " Bulan");
                    modal.find("#gender").html(getGender(res['jenis_kelamin']));
                    modal.find("#berat_lhr").html(res['berat_lhr'] + " Kg");
                    modal.find("#panjang_lhr").html(res['panjang_lhr'] + " Cm");
                }
            });

            function monthDiff(d1, d2) {
                var months;
                months = (d2.getFullYear() - d1.getFullYear()) * 12;
                months -= d1.getMonth();
                months += d2.getMonth();
                return months <= 0 ? 0 : months;
            }

            function getGender(kd_gender) {
                var gender;
                if (kd_gender == "P") {
                    gender = "Perempuan";
                } else {
                    gender = "Laki Laki";
                }
                return gender;
            }

        });
    });
</script>