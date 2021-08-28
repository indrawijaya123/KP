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
					<h1><?= ($tag != 'edit')?"Tambah": "Edit"; ?> Produk</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/stok') ?>">Stok</a></li>
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
							<h3 class="card-title"><?= ($tag != 'edit')?"Tambah": "Edit"; ?> Produk</h3>
						</div>
						<div class="card-body">
							<?php if($tag != 'edit'){ ?>
							<form action="<?= base_url('admin/produk/add')?>" method="post">
								<?php } else { ?>
								<form action="<?= base_url('admin/stok/edit/'.sanitasi($id))?>" method="post">
									<?php } ?>
									<!-- Start: Kategori Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('nmKategori') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Kategori</span>
											</div>
											<select name="nmKategori" class="form-control select2" >
												<option value="" selected="selected">Pilih</option>
												<?php foreach($selectKategori->result_array() as $row): ?>
													<option value="<?= sanitasi($row['id']); ?>" ><?= strtoupper(sanitasi($row['jenis'])); ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<?= form_error('nmKategori'); ?>
									</div>
									<!-- End: Kategori Produk -->

									<!-- Start: Merek Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('nmMerek') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Merek</span>
											</div>
											<select name="nmMerek" class="form-control select2" >
												<option value="" selected="selected">Pilih</option>
												<?php foreach($selectMerek->result_array() as $row): ?>
													<option value="<?= sanitasi($row['id']); ?>" ><?= strtoupper(sanitasi($row['merk'])); ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<?= form_error('nmMerek'); ?>
									</div>
									<!-- End: Merek Produk -->

									<!-- Start: Size Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('nmSize') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Size</span>
											</div>
											<select name="nmSize" class="form-control select2" >
												<option value="" selected="selected">Pilih</option>
												<?php foreach($selectSize->result_array() as $row): ?>
													<option value="<?= sanitasi($row['id']); ?>" ><?= strtoupper(sanitasi($row['size'])); ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<?= form_error('nmSize'); ?>
									</div>
									<!-- End: Size Produk -->

									<!-- Start: Kode Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('kodeProduk') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Kode Produk</span>
											</div>
											<input type="text" name="kodeProduk" id="kodeProduk" value="<?= set_value('kodeProduk', sanitasi($dataStok))?>" maxlength="10" class="form-control <?= (form_error('kodeProduk') != null)? 'is-invalid':''; ?>" placeholder="Kode Produk" />
										</div>
										<?= form_error('kodeProduk'); ?>
									</div>
									<!-- End: KOde Produk -->

									<!-- Start: Nama Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('namaProduk') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Nama Produk</span>
											</div>
											<input type="text" name="namaProduk" id="namaProduk" value="<?= set_value('namaProduk', sanitasi($dataStok))?>" maxlength="10" class="form-control <?= (form_error('namaProduk') != null)? 'is-invalid':''; ?>" placeholder="Nama Produk" />
										</div>
										<?= form_error('namaProduk'); ?>
									</div>
									<!-- End: Nama Produk -->

									<!-- Start: Harga Produk -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('hargaProduk') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Harga</span>
											</div>
											<input type="number" name="hargaProduk" id="namaProduk" value="<?= set_value('hargaProduk', sanitasi($dataStok))?>" class="form-control <?= (form_error('hargaProduk') != null)? 'is-invalid':''; ?>" placeholder="0" />
										</div>
										<?= form_error('hargaProduk'); ?>
									</div>
									<!-- End: Harga Produk -->

									<!-- Start: Stok -->
									<div class="form-group">
										<div class="input-group mb-3 <?= (form_error('stokProduk') != null)? 'has-error':''; ?>">
											<div class="input-group-prepend">
												<span class="input-group-text">Jumlah Stok</span>
											</div>
											<input type="number" name="stokProduk" id="stokProduk" value="<?= set_value('stokProduk', sanitasi($dataStok))?>" class="form-control <?= (form_error('stokProduk') != null)? 'is-invalid':''; ?>" placeholder="0" />
										</div>
										<?= form_error('stokProduk'); ?>
									</div>
									<!-- End: Stok -->

									<div class="form-group">
										<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
										<a href="<?= base_url('admin/produk'); ?>"><button type="button" class="btn btn-sm btn-danger">Cancel</button></a>
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

