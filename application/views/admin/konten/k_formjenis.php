<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= ($tag != 'edit')?"Tambah": "Edit"; ?> kategori</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/jenis') ?>">kategori</a></li>
						<li class="breadcrumb-item active"><?= ($tag != 'edit')?"Tambah": "Edit"; ?> Add</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-md-4">
					<!-- Start Pesan -->
					<?php
					echo $this->session->flashdata('pesan1');
					echo $this->session->flashdata('pesan2'); ?>
					<!-- End Pesan -->
				</div>
			</div>
			<!-- Default box -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="card card-dark">
						<div class="card-header">
							<h3 class="card-title"><?= ($tag != 'edit')?"Tambah": "Edit"; ?> kategori</h3>
						</div>
						<div class="card-body">
							<?php if($tag != 'edit'){ ?>
							<form action="<?= base_url('admin/jenis/add')?>" method="post">
								<?php } else { ?>
								<form action="<?= base_url('admin/jenis/edit/'.sanitasi($id))?>" method="post">
									<?php } ?>
									<div class="form-group">
										<label for="namaJenis">Nama Kategori <span class="text-danger">*</span></label>
										<input type="text" name="namaJenis" id="namaJenis" value="<?= set_value('namaJenis', sanitasi($dataJenis))?>" maxlength="20" class="form-control <?= (form_error('namaJenis') != null)? 'is-invalid':''; ?>" placeholder="Nama Jenis" required/>
										<?= form_error('namaJenis'); ?>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
										<a href="<?= base_url('admin/jenis'); ?>"><button type="button" class="btn btn-sm btn-danger">Cancel</button></a>
									</div>
								</form>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

