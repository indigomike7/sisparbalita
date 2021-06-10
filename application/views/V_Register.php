<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><?= $sub_judul; ?></h1>
        <p class="lead">Silahkan Login/Register Dulu</p>
    </div>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12 mb-4 info-konsul">
            <div class="col mr-2">
                <div class="text-xs text-center font-weight-bold text-uppercase mb-3">
                    <h5>
                        Silahkan Login atau Register dulu
                    </h5>
                </div>
                <div class="col-md-6">
                    <form class="user" method="post"  autocomplete="false" action="<?= base_url('registerpasien'); ?>">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<h3>Register</h3>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
                                    <?= $this->session->flashdata('info'); ?>
<?php echo validation_errors(); ?>
						Nama
						<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off">
						Email<br/>
						<input type="text" name="email" class="form-control"  placeholder="Email" autocomplete="false">
						Nama Pasien<br/>
						<input type="text" name="nama_pasien" class="form-control"  placeholder="Nama Pasien">
						Umur Pasien<br/>
						<select name="umur_pasien" class="form-control"  >
						<option value="1">1 - 3 bulan</option>
						<option value="2">4 - 6 bulan</option>
						<option value="3">7 - 12 bulan</option>
						<option value="4">12 - 18 bulan</option>
						<option value="5">1,5 - 2 tahun</option>
						<option value="6">3 - 5 tahun</option>
						</select>
						Password<br/>
						<input type="password" name="password" class="form-control">
						Confirm Password<br/>
						<input type="password" name="confirm_password" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary"> &nbsp;Register</button>
                    </form>
                </div>
                <div class="col-md-6">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				<h3>Login</h3>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
                    <?= $this->session->flashdata('info2'); ?>
                    <form class="user" method="post" action="<?= base_url('registerpasien/loginpasien'); ?>">
						<input type="email" name="email" class="form-control" >
						<input type="password" name="password" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary"> &nbsp;Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-success mt-4">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website Sistem Pakar 2021 | Credit By : Ahmad Ari Susanto
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