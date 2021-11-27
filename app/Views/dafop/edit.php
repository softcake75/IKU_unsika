<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Data Definisi Operasional</h4>
      </div>
      <form action="<?php echo base_url('dafop/update/' . $dafop['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Indikator Kinerja Utama</label>
            <div class="col-sm-12 col-md-9">
              <input type="text" class="form-control" name="indikator" value="<?php echo $dafop['indikator']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Definisi Operasional</label>
            <div class="col-sm-12 col-md-9">
              <textarea class="summernote" name="definisi"><?php echo $dafop['definisi']; ?></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Satuan</label>
            <div class="col-sm-12 col-md-9">
              <input type="text" class="form-control" name="satuan" value="<?php echo $dafop['satuan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Catatan</label>
            <div class="col-sm-12 col-md-9">
              <textarea class="form-control" name="catatan"><?php echo $dafop['catatan']; ?></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-9">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('dafop') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>