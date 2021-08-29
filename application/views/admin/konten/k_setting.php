<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Setting</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ;?>">Home</a></li>
						<li class="breadcrumb-item active">Setting</li>
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
					echo $this->session->flashdata('pesan');?>
					<!-- End Pesan -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<!-- Default box -->
					<div class="card card-dark">
						<div class="card-header">
							<h3 class="card-title">Ubah Password</h3>

						</div>
						<div class="card-body">
							<form action="<?= base_url('admin/setting')?>" method="post">
								<!--Start: Password 1-->
								<div class="form-group">
									<label for="password">Password<span class="text-danger">*</span></label>
									<input type="password" name="password" value="<?= set_value('password')?>" maxlength="16" class="form-control <?= (form_error('password') != null)? 'is-invalid':''; ?>" placeholder="******" />
									<?= form_error('password'); ?>
								</div>
								<!--END: Password 1-->

								<!--Start: Password 2-->
								<div class="form-group">
									<label for="password2">Ulangi Password<span class="text-danger">*</span></label>
									<input type="password" name="password2" value="<?= set_value('password2')?>" maxlength="16" class="form-control <?= (form_error('password2') != null)? 'is-invalid':''; ?>" placeholder="******" required/>
									<?= form_error('password2'); ?>
								</div>
								<!--END: Password 2-->

								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-primary">Ubah Password</button>
								</div>
							</form>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<small>Versi 1.0.0 <i>created by Indra Wijaya (1811010005)</i></small>
						</div>
						<!-- /.card-footer-->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
