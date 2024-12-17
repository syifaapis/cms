<div class="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button to trigger the modal -->
<!-- Tombol untuk memunculkan Modal -->
<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
        Tambah Konten
    </button>
</div>

</button>

<!-- Modal -->
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<!-- Form untuk menyimpan data -->
		<form action="<?= base_url('admin/konten/simpan') ?>" method="POST" enctype='multipart/form-data'>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahUserModalLabel">Tambah Konten</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Form inputan untuk tambah user -->
					<div class="mb-3">
						<label for="nama" class="form-label" style="position:relative;right:13rem;">judul</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan judul" name="judul"
							required>
					</div>
					<div class="col mb-3">
						<label class="form-label" style="position:relative;right:12.5rem;">Kategori</label>
						<select name="id_kategori" class="form-control">
							<?php foreach($kategori as $aa) {?>
							<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
							<?php } ?>
						</select>
					</div>

					<div class="mb-3">
						<label for="nama" class="form-label" style="position:relative;right:7rem;">Keterangan</label>
						<textarea name="keterangan" class="form_control"></textarea>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label" style="position:relative;right:13rem;">Foto</label>
						<input type="file" class="form-control" name="foto" accept="image/png, image/jpg,  image/jpeg">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Tambahkan Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<div class="table-responsive">
    <table class="table table-striped table-hover text-nowrap align-middle">
        <thead class="table">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori Konten</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Kreator</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($konten as $aa) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $aa['judul'] ?></td>
                    <td><?= $aa['nama_kategori'] ?></td>
                    <td class="text-truncate" style="max-width: 150px;" title="<?= $aa['keterangan'] ?>">
                        <?= substr($aa['keterangan'], 0, 50) ?>...
                    </td>
                    <td><?= $aa['tanggal'] ?></td>
                    <td><?= $aa['username'] ?></td>
                    <td>
                        <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                            <i class="ti ti-search"></i> Lihat Foto
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"
                           href="<?= base_url('admin/konten/hapus/' . $aa['foto']) ?>">
                            <i class="ti ti-trash"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#konten<?= $no; ?>">
                            <i class="ti ti-edit"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <form action="<?= base_url('admin/konten/update') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel"><?= $aa['judul'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $aa['judul'] ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Kategori</label>
                                                <select name="id_kategori" id="kategori" class="form-control">
                                                    <?php foreach ($kategori as $uu) { ?>
                                                        <option value="<?= $uu['id_kategori'] ?>" <?= ($uu['id_kategori'] == $aa['id_kategori']) ? 'selected' : '' ?>>
                                                            <?= $uu['nama_kategori'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3"><?= $aa['keterangan'] ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Foto</label>
                                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

