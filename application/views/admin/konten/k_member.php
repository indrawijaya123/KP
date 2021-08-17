<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Selamat Datang di Administrator</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('index.php/admin/dashboard') ;?>">Home</a></li>
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
				<h3 class="card-title">Panduan Administrator</h3>

			</div>
			<div class="card-body">
				<img src="<?= base_url('assets/gambartoko.jpg'); ?>" width="700" height="320">
				<h3 align="center"><b>Panduan Menggunakan Sistem Informasi Elektronik Toko Anugerah</b></h3>
				<p>Untuk mendapatkan dan mengupdate informasi terkait Stok produk, silahkan Klik menu "Stok produk"</p>
				<P>Untuk mendapatkan dan mengupdate informasi terkait Merk produk, silahkan Klik menu "Merk produk"</P>
				<P>Untuk mendapatkan dan mengupdate informasi terkait Size produk, silahkan Klik menu "Size produk"</P>
				<P>Untuk mendapatkan dan mengupdate informasi terkait Harga produk, silahkan Klik menu "Harga produk"</P>
				<P>Untuk mendapatkan dan mengupdate informasi terkait Type produk, silahkan Klik menu "Type produk"</P>
				<p>Untuk mendapatkan dan mengupdate informasi terkait Jenis produk, silahkan Klik menu "Jenis produk"</p>
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
