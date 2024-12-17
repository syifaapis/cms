<div class="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<!-- Button to trigger the modal -->
<!-- Tombol untuk memunculkan Modal -->
<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
        Tambah User
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <!-- Form untuk menyimpan data -->
        <form action="<?= base_url('admin/user/simpan') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahUserModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inputan untuk tambah user -->
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:13rem;">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label" style="position:relative;right:12rem;">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="position:relative;right:12rem;">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label" style="position:relative;right:13rem;">Level</label>
                        <select class="form-control" id="level" name="level" required>
                            <option value="Admin">Admin</option>
                            <option value="Kontributor">Kontributor</option>
                        </select>
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
    <table class="table text-nowrap mb-0 align-middle">
    <thead class="text-dark fs-4">
    <tr>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">data pengguna</h6>
        </th>
        <tr>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">No</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Username</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Nama</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Level</h6>
        </th>
        <th class="border-bottom-0">
            <h6 class="fw-semibold mb-0">Aksi</h6>
        </th>
        </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($user as $aa) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $aa['username'] ?></td>
        <td><?= $aa['nama'] ?></td>
        <td><?= $aa['level'] ?></td>
        <td>
            <a class="btn btn-sm btn-danger"
                onClick="return confirm('Apakah anda yakin ingin menghapus ini?')"
                href="<?= base_url('admin/user/hapus/'.$aa['id_user'])?>">
            <i class="ti ti-trash"></i>
            </a>
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                <i class="ti ti-edit"></i>
                </button>

            <!-- Modal -->
            <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <!-- Form untuk menyimpan data -->
                <form action="<?= base_url('admin/user/update') ?>" method="POST">
                <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahUserModalLabel">Perbarui Nama User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form inputan untuk tambah user -->
                            <div class="mb-3">
                                <label for="nama" class="form-label" style="position:relative;right:13rem;">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $aa['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label" style="position:relative;right:12rem;">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $aa['username'] ?>" readonly>
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
    </table>
</div>