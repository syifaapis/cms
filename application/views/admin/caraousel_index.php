<div class="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-xl-12">
  <div class="card">
  <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
  <div class="card-header">
    <h2>File input</h2>
  </div>
  <div class="card-body">
    <div class="col mb-3">
      <label class="form-label" style="position:relative;right:32rem;">Judul</label>
      <input type="text" class="form-control" placeholder="judul foto" name="judul" required>
    </div>
    <div class="">
      <label for="formFile" class="form-label" style="position:relative;right:27rem;">Pilih Foto dengan ukuran (1:3)</label>
      <input class="form-control" type="file" name="foto">
    </div>
  </div>
  <div class="modal-footer mb-4">
    <button type="submit" class="btn btn-primary"style="position:relative;right:2rem;">Simpan</button>
  </div>
</form>

<div class="row">
  <?php foreach ($caraousel as $aa) { ?>
    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <img class="card-img-top custom-img" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $aa['judul'] ?></h5>
          <a class="btn btn-sm btn-danger"
              onClick="return confirm('Apakah anda yakin ingin menghapus ini?')"
              href="<?= base_url('admin/caraousel/hapus/'.$aa['foto'])?>">
          <i class="ti ti-trash"></i>
          </a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


