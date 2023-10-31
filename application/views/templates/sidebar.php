	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-lik">Home</a>
				</li>
				<!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<h3><span class="brand-text font-weight-light"><b>Poin Pelanggaran</b></span></h3>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('siswa') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'siswa') echo 'active' ?>">
								<i class="nav-icon fas fa-users"></i>
								<p>Siswa</p>
							</a>
						</li>

					
					

						<li class="nav-item">
							<a href="<?= site_url('auth/logout') ?>" class="nav-link">
								<i class="nav-icon fas fa-undo"></i>
								<p>Logout</p>
							</a>
						</li>

					</ul>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"><?= $title ?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">