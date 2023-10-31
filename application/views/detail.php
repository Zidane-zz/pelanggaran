<div class="container">
	<div class="row mt-3">
		<div class="col md-6">
			<div class="card">
				<div class="card-header">
					<h2><b>Detail Data Siswa</b></h2>
				</div>
				<div class="card-body">
					<h4><?= $siswa['NAMA']; ?></h4>
					<p class="card-text"> <label>NISN : </label> <?= $siswa['NISN']; ?></p>
					<p class="card-text"> <label>NAMA SISWA : </label> <?= $siswa['NAMA']; ?></p>
					<p class="card-text"> <label TANGGAL : <?= $siswa['TANGGAL'] ?>
					<p class="card-text"> <label>JENIS KELAMIN : </label> <?= $siswa['JENIS_KELAMIN']; ?></p>
					<p class="card-text"> <label>JURUSAN : </label> <?= $siswa['JURUSAN']; ?></p>
				</div>

			</div>
			<a class="btn btn-secondary btn-sm" href="<?= base_url('siswa') ?>">Kembali</a>
		</div>
	</div>
</div>
