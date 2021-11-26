<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Indikator Kinerja</h4>
      </div>
      <form action="<?php echo base_url('kerja5/update/' . $kerja5['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">

            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Indikator Kinerja</label>
            <div class="col-sm-12 col-md-7">
              <textarea class="summernote" name="indikator"><?php echo $kerja5['indikator']; ?></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Satuan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="satuan" value="<?php echo $kerja5['satuan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Target</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kinerja_target" value="<?php echo $kerja5['kinerja_target']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Realisasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kinerja_realisasi" value="<?php echo $kerja5['kinerja_realisasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Capaian</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kinerja_capaian" value="<?php echo $kerja5['kinerja_capaian']; ?>">
            </div>
          </div>


          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('kerja5') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>