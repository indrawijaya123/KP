<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tentang Kami</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ;?>">Home</a></li>
						<li class="breadcrumb-item active">Tentang Kami</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">Profile</h3>

			</div>
			<div class="card-body">
				<img src="<?= base_url('assets/gambar2.jpg'); ?>" width="150" height="150">
				<h5><b>Profil Developer</h5></b></br>
				<p>nama : Indra Wijaya</p>
				<p>Contact person : 085273166832</p>
				<p>instagram : Wijayaindra999</p>
				</br>
				<img src="<?= base_url('assets/gambarbotak.jpeg'); ?>" width="150" height="150">
				<h5><b>Profil Pimpinan</h5></b></br>
				<p>nama : IPIN</p>
				<p>Contact person : 085777707203</p>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<small>Versi 1.0.0 <i>created by Indra Wijaya (1811010005)</i></small>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
