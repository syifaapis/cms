<div class="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-3" id="tambahUserModalLabel">Kofigurasi</h5>
                </div>
                <div class="modal-body">
                    <!-- Form inputan untuk tambah user -->
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:32rem;">Judul Website</label>
                        <input type="text" class="form-control" id="nama"  name="judul" value="<?= $konfig->judul_website; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:33.5rem;">Profile</label>
                        <input type="text" class="form-control" id="nama"  name="profil_website" value="<?= $konfig->profil_website; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:32.6rem;">Instagram</label>
                        <input type="text" class="form-control" id="nama"  name="instagram" value="<?= $konfig->instagram; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:32.5rem;">Facebook</label>
                        <input type="text" class="form-control" id="nama"  name="facebook" value="<?= $konfig->facebook; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:33.5rem;">Email</label>
                        <input type="text" class="form-control" id="nama"  name="email" value="<?= $konfig->email; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:33rem;">Alamat</label>
                        <input type="text" class="form-control" id="nama"  name="alamat" value="<?= $konfig->alamat; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="position:relative;right:32.4rem;">WhatsApp</label>
                        <input type="text" class="form-control" id="nama"  name="no_wa" value="<?= $konfig->no_wa; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>