<?= $this->session->flashdata('pesan'); ?>

<div class="card">	
	<div class="card-header">
		<h3 class="card-title">DATA SISWA</h3>
		<br>
		<a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>

	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No</th>
					<th>NISN</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Jenis kelamin</th>
					<th>Tanggal</th>
					<th>poin</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php $no = 1;
			foreach ($siswa as $ssw) : ?>

				<tr class="text-center">
					<td><?= $no++ ?></td>
					<td><?= $ssw->NISN ?></td>
					<td><?= $ssw->NAMA ?></td>
					<td><?= $ssw->JURUSAN ?></td>
					<td><?= $ssw->JENIS_KELAMIN?></td>
					<td><?= $ssw->TANGGAL?></td>
					<td><?= $ssw->POIN ?></td>
					<td>
						<button data-toggle="modal" data-target="#edit<?= $ssw->id_siswa ?>" type="submit" class="btn btn-warning btn-sm">
							<i class="fas fa-edit"></i></button>
						<a href="<?= base_url('siswa/delete/' . $ssw->id_siswa) ?>" class="btn btn-danger btn-sm"
						onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
						<a href="<?= base_url('siswa/detail/' . $ssw->id_siswa) ?>" class="btn btn-success btn-sm">
						<i class="fas fa-search-plus"></i></a>
					</td>
				</tr>

			<?php endforeach ?>
		</table>
	</div>

</div>



<!-- Modal Edit -->
<?php foreach ($siswa as $ssw) { ?>
	<div class="modal fade" id="edit<?= $ssw->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('siswa/update/' . $ssw->id_siswa) ?>" method="POST">

						<div class="form-group">
							<label>NISN</label>
							<input type="text" name="NISN" class="form-control" maxlength="10" value="<?= $ssw->NISN ?>">
							<?= form_error('NISN', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label>Nama Siswa</label>
							<input type="text" name="NAMA" class="form-control" value="<?= $ssw->NAMA ?>">
							<?= form_error('NAMA', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
					
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" name="TANGGAL" class="form-control" value="<?= $ssw->TANGGAL ?>">
							<?= form_error('TANGGAL', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						
						
						<div class="form-group">
							<label for="pilihan-jurusan">Jurusan :</label>
							<select id="pilihan-jurusan" name="JURUSAN" class="form-control" value="<?= $ssw->JURUSAN ?>">
								<option>Pilih</option>
								<option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
								<option value="Multimedia">Multimedia</option>
								<option value="Teknnik Komputer dan Jaringan">Teknnik Komputer dan Jaringan</option>
								<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
							</select>
							<!-- <label>Jurusan</label>
							<input type="text" name="JURUSAN" class="form-control"> -->
							<?= form_error('JURUSAN', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
							<button type="reset" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i> Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
