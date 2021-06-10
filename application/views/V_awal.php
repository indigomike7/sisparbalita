<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Selamat Datang <br> Di SISPAR</h1>
        <p class="lead">Sistem Pakar Pertumbuhan Balita <br> Menggunakan Metode CBR (Case Based Reasoning)</p>
        <a href="<?php echo base_url('konsultasi'); ?>" class="btn btn-sm btn-outline-success"><i class="fas fa-question-circle"></i> Mulai Konsultasi</a>
    </div>
</div>

<!-- Container -->
<div class="container">
    <!-- Panel -->
    <div class="row justify-content-center">
        <div class="col-lg-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <h5>Bagaimana <span>Sispar</span> Bekerja ??</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/user.png'); ?>" alt="Login">
                    <h4>Admin</h4>
                    <p>Admin menginputkan data gerak motorik dan pertumbuhan.</p>
                </div>
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/konsul.png'); ?>" alt="Konsul">
                    <h4>User</h4>
                    <p>Pengguna memberikan masukan berupa gejala motorik yang dicapai balita pada halaman konsultasi.</p>
                </div>
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/result.png'); ?>" alt="Hasil">
                    <h4>Hasil</h4>
                    <p>Hasil yang dikeluarkan dari sistem berupa status pertumbuhan balita sesuai dengan metode cbr</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Panel -->

    <!-- Informasi Pertumbuhan -->
    <div class="row informasi">
        <div class="col">
            <img src="<?= base_url('assets/img/informasi.png'); ?>" alt="infopertumbuhan" class="img-fluid">
        </div>
        <div class="col ml-2">
            <h3>Apa Itu <span>Sispar</span> ??</h3>
            <p>Sispar merupakan sebuah sistem yang dapat membantu pengguna atau orang - orang dalam berkonsultasi tentang pertumbuhan balita.</p>
            <a href="<?php echo base_url('informasi'); ?>" class="btn btn-sm btn-outline-primary infobtn"><i class="fas fa-info-circle"></i> Info Pertumbuhan</a>
        </div>
    </div>
    <!-- End Of -->

</div>
<!-- End Of Container -->


</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer bg-success mt-5">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website Sistem Pakar 2021 | Credit By : Ahmad Ari Susanto</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->


</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>