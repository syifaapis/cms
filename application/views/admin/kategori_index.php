<div class="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<!-- Button to trigger the modal -->
<!-- Tombol untuk memunculkan Modal -->
<h1 class="mb-4">Kategori Konten</h1>

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
        Tambah Kategori
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <!-- Form untuk menyimpan data -->
        <form action="<?= base_url('admin/kategori/simpan') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahUserModalLabel" >Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body">
                    <!-- Form inputan untuk tambah user -->
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:11rem;">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama_kategori" required>
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
    <table class="table text-nowrap mb-2 align-middle">
    <thead class="text-dark fs-4">
    <tr>
        <tr>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">No</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Nama Kategori Konten</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Aksi</h6>
        </th>
        </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($kategori as $aa) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $aa['nama_kategori'] ?></td>
        <td>
            <a class="btn btn-sm btn-danger"
                onClick="return confirm('Apakah anda yakin ingin menghapus ini?')"
                href="<?= base_url('admin/kategori/hapus/'.$aa['id_kategori'])?>">
            <i class="ti ti-trash"></i>
            </a>
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori'] ?>">
                <i class="ti ti-edit"></i>
                </button>

            <!-- Modal -->
            <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <!-- Form untuk menyimpan data -->
                <form action="<?= base_url('admin/kategori/update') ?>" method="POST">
                <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahUserModalLabel">Perbarui Nama Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form inputan untuk tambah user -->
                            <div class="mb-3">
                                <label for="nama" class="form-label" style="position:relative;right:11rem;">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kategori" name="nama_kategori" value="<?= $aa['nama_kategori'] ?>">
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
<?php  } ?>
    </table>
</div>