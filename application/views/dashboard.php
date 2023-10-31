<?= $this->session->flashdata('pesan'); ?>

<div class="card">	
	<div class="card-header">
		<h3 class="card-title">Pelanggaran</h3>
		<br>


	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No</th>
					<th>Pelanggaran</th>
                    <th>Poin</th>
				</tr>
			</thead>
			<?php $no = 1;
			foreach ($pelanggaran as $ssw) : ?>

				<tr class="text-center">
					<td><?= $no++ ?></td>
					<td><?= $ssw->nama_pelanggaran ?></td>
                    <td><?= $ssw->poin ?></td>
					
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
<?php foreach ($pelanggaran as $ssw) { ?>
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
					
				</div>
			</div>
		</div>
	</div>
<?php } ?>

