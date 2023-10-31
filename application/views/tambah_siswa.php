	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('siswa/tambah_aksi') ?>" method="POST">

						<div class="form-group">
							<label>NISN</label>
							<input type="text" name="NISN" class="form-control" maxlength="10">
							<?= form_error('NISN', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label>Nama Siswa</label>
							<input type="text" name="NAMA" class="form-control">
							<?= form_error('NAMA', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" name="TANGGAL" class="form-control">
							<?= form_error('TANGGAL', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="pilih-jk">Jenis Kelamin :</label>
							<select name="JENIS_KELAMIN" id="pilih-jk" class="form-control">
								<option>Pilih</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?= form_error('JENIS_KELAMIN', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
					
						<div class="form-group">
							<label for="pilihan-jurusan">Jurusan :</label>
							<select id="pilihan-jurusan" name="JURUSAN" class="form-control">
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
						<div class="form-group">
							<label>Poin</label>
							<input type="number" name="Poin" class="form-control">
							<?= form_error('Poin', '<div class="text-small text-danger">', '</div>'); ?>
						</div>
						

						<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
						<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>

					</form>
				</div>
			</div>
		</div>
	</div>
