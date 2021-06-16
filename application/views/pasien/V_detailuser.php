<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $sub_judul; ?></h1>
    </div>

    <!-- notifikasi -->
    <?= $this->session->flashdata('info'); ?>

    <!-- Data Penyakit -->
<?php                            foreach ($detail as $row) { 
if($row['umur_pasien']=="1")
	$umur="1 - 3 Bulan";
if($row['umur_pasien']=="2")
	$umur="4 - 6 Bulan";
if($row['umur_pasien']=="3")
	$umur="7 - 12 Bulan";
if($row['umur_pasien']=="4")
	$umur="12 - 18 Bulan";
if($row['umur_pasien']=="5")
	$umur="1,5 - 2 Tahun";
if($row['umur_pasien']=="6")
	$umur="3 - 5 Tahun";
?>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Data User <?= $row['email']; ?></h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <h5 class="card-title"><strong><?= $row['email']; ?></strong></h5>
                <p class="card-text text-justify"><b>ID User : <?= $row['id']; ?></b></p>
                <p class="card-text text-justify"><b>Email User : <?= $row['email']; ?></b></p>
                <p class="card-text text-justify"><b>Nama Pasien : <?= $row['nama_pasien']; ?></b></p>
                <p class="card-text text-justify"><b>Umur Pasien : <?= $umur; ?></b></p>
            </div>
        </div>

    </div>

  <?php } ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->