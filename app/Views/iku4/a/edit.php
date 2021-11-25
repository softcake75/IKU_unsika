<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>


<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Table Iku 4 (Kualifikasi Akademik S3)</h4>
      </div>
      <form action="<?php echo base_url('iku4_a/update/' . $iku_4_a['id']); ?>" method="post">
        <div class="card-body">

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku_4_a['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi Mengajar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi_mengajar" value="<?php echo $iku_4_a['prodi_mengajar']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi S3</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi_s3" value="<?php echo $iku_4_a['prodi_s3']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Ijazah</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_ijazah" value="<?php echo $iku_4_a['tautan_ijazah']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Update Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_update_sister" value="<?php echo $iku_4_a['bukti_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku3_c['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku3_c['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku4_a') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>