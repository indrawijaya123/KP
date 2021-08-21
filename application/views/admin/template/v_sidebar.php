<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<div class="brand-link"><img src="<?= base_url('assets/gambar1.png'); ?>"
								 alt="AdminLTE Logo" widht="50px"
								 class="brand-image img-circle elevation-3"
								 style="opacity: .8">
		<span class="brand-text font-weight-light"> Toko Anugerah</span>
	</div>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/profile.png'); ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">ADMIN</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="<?= base_url('index.php/admin/dashboard'); ?>" class="nav-link <?= ($menu == 'dashboard')?"active":""; ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('index.php/admin/produk'); ?>" class="nav-link <?= ($menu == 'produk')?"active":""; ?>">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Produk
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('index.php/admin/merk'); ?>" class="nav-link <?= ($menu == 'merk')?"active":""; ?>">
						<i class="nav-icon fas fa-copyright"></i>
						<p>
							Merk
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('index.php/admin/jenis'); ?>" class="nav-link <?= ($menu == 'jenis')?"active":""; ?>">
						<i class="nav-icon fas fa-clipboard"></i>
						<p>
							Kategori
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('index.php/admin/size'); ?>" class="nav-link <?= ($menu == 'size')?"active":""; ?>">
						<i class="nav-icon fas fa-window-maximize"></i>
						<p>
							size
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('index.php/admin/setting'); ?>" class="nav-link <?= ($menu == 'tentang kami')?"active":""; ?>">
						<i class="fas fa-address-card"></i>
						<p>
							Tentang Kami
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
