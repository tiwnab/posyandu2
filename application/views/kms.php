<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KMS | Posyandu</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>frontimg/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>front/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>front/posyandu.css">

</head>

<body>
<!-- Preloader-->
<!--<div class="preloader d-flex align-items-center justify-content-center">-->
<!--    <div class="spinner"></div>-->
<!--</div>-->


<?php $this->load->view($header);?>


<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax padding-bottom-400" style="background-image: url('<?php echo base_url()?>front/img/bg-img/12.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="newsletter-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-center">

                        <h2><span>Pencarian </span> Data KMS</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Form -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Masukan Nama Balita">
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form id="search_no_kk">
                    <input type="text" class="form-control" placeholder="Masukan No KK" id="cari">
                    <button type="submit" class="btn famie-btn">Cari</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center section-padding-100" id="data-kms" style="display: none;">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="text-black-50">Nama Anak</label>
                                <label id="nama_anak"></label>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6 text-right">
                                <label class="">Berat Badan/Panjang Lahir</label>
                                <label id="berat_panjang"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="text-black-50">Tanggal Lahir</label>
                                <label id="tgl_lahir"></label>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-right">
                                <label class="">Nama Orang Tua</label>
                                <label id="nama_ortu"></label>
                            </div>
                        </div>
                        <div class="row justify-content-center chart-kurva">
                            <div class="col-md-6">
                                <div id="chartContainer" style="width: 100%; height: 300px;"></div>
                                <div id="chartEmpty" style="width: 100%; height: 300px; display: none;">
                                    <h3>Silahkan Menghitung Berat dan Tinggi Anak Dahulu</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center chart-kurva">
                            <div class="col-md-6" id="table_imunisasi" style="display:none;">
                                <h3>Jadwal Imunisasi</h3>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Jenis</th>
                                        <th scope="col"></th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Umur</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($list_imunisasi != null){
                                    foreach ($list_imunisasi as $list_imunisasi):?>
                                    <tr>
                                        <td><?php echo $list_imunisasi->jenis ?></td>
                                        <td><?php echo $list_imunisasi->sesi ?></td>
                                        <td><label id="jenis_<?php echo $list_imunisasi->id?>"></label></td>
                                        <td><?php echo $list_imunisasi->ket_sesi ?></td>
                                    </tr>
                                    <?php endforeach;
                                    } else {echo "<tr><td>Data Not Found</td></tr>";}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Newsletter Area Start ##### -->



<footer class="footer-area">
    <div class="copywrite-area">
        <div class="container">
            <div class="copywrite-text">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dev<i class="fa fa-heart-o" aria-hidden="true"></i> by aa
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav">
                            <nav>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jquery 2.2.4  -->
<script src="<?php echo base_url()?>front/js/jquery.min.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url()?>front/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url()?>front/js/bootstrap.min.js"></script>
<!-- Owl Carousel js -->
<script src="<?php echo base_url()?>front/js/owl.carousel.min.js"></script>
<!-- Classynav -->
<script src="<?php echo base_url()?>front/js/classynav.js"></script>
<!-- Wow js -->
<script src="<?php echo base_url()?>front/js/wow.min.js"></script>
<!-- Sticky js -->
<script src="<?php echo base_url()?>front/js/jquery.sticky.js"></script>
<!-- Magnific Popup js -->
<script src="<?php echo base_url()?>front/js/jquery.magnific-popup.min.js"></script>
<!-- Scrollup js -->
<script src="<?php echo base_url()?>front/js/jquery.scrollup.min.js"></script>
<!-- Jarallax js -->
<script src="<?php echo base_url()?>front/js/jarallax.min.js"></script>
<!-- Jarallax Video js -->
<script src="<?php echo base_url()?>front/js/jarallax-video.min.js"></script>
<!-- Active js -->
<script src="<?php echo base_url()?>front/js/active.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    //Simpan Barang
    $('#search_no_kk').submit(function(event) {
        var cari= $('#cari').val();
        var date = new Date();
        date.setDate(date.getDate() - 30);
        event.preventDefault();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url();?>search/no_kk",
            dataType : "JSON",
            data : {no_kk:cari},
            success: function(data){
                console.log(data.data_imunisasi.length);
                $('#data-kms').css("display", "block");
                $('#chartContainer').css("display", "block");
                $('#chartEmpty').css("display", "none");
                $('#nama_anak').text(": "+data.balita.nama);
                $('#berat_panjang').text(": " + data.balita.berat_lhr + " Kg " + data.balita.panjang_lhr + " Cm");
                $('#tgl_lahir').text(": " + data.balita.tgl_lahir);
                $('#nama_ortu').text(": "+data.orang_tua.nama_ayah+"/"+data.orang_tua.nama_ibu);
                if (data.data_imunisasi.length >= 1) {
                    $('#table_imunisasi').css("display", "block");
                    for (i = 0; i < data.data_imunisasi.length; i++) {
                        $('#jenis_'+data.data_imunisasi[i].id_imunisasi).text(data.data_imunisasi[i].tgl_imunisasi);
                    }
                } else {
                    $('#table_imunisasi').css("display", "none");
                    Swal.fire({
                        icon: 'warning',
                        title: 'WARNING',
                        text: 'Data Imunisasi Anda Tidak Ditemukan'
                    })
                }

                if (data.statistik_anak.length > 0){
                    createChart(data.statistik_anak);
                } else {
                    $('#chartContainer').css("display", "none");
                    $('#chartEmpty').css("display", "block");
                }
                var tgl_imunisasi = new Date(data.data_imunisasi[0].tgl_imunisasi);
                if (tgl_imunisasi < date) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'WARNING',
                        text: 'Terakhir Anda Imunisasi Sebulan Yang Lalu'
                    })
                }
            }
        });
        return false;
    });
    function createChart(data) {
        var datapoints = [];
        for (i = 0; i < data.length; i++) {
            datapoints.push({y: parseFloat(data[i]['berat']), x:parseFloat(data[i]['tinggi']), indexLabel: data[i]['month'], markerColor: "red", markerType: "point"})
        }
        console.log(datapoints);
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Kurva Pertumbahan Badan"
            },
            axisY:{
                includeZero: false,
                title: "Berat Badan"
            },
            axisX: {
                title: "Tinggi Badan"
            },
            data: [{
                type: "line",
                xValueFormatString: "Tinggi : ###.# Cm",
                yValueFormatString: "Berat ###.# Kg",
                dataPoints: datapoints
            }]
        });
        chart.render();
    }

</script>
</body>

</html>