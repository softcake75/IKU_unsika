<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 8 (Akreditasi Internasional)</h4>
      </div>
      <form action="<?php echo base_url('iku8/update/' . $iku8['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku8['prodi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenjang Studi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jenjang_studi" value="<?php echo $iku8['jenjang_studi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="fakultas" value="<?php echo $iku8['fakultas']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Keaktifan</label><br>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="aktif" name="status_keaktifan" value="1" class="custom-control-input" <?php if ($iku8['status_keaktifan'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="aktif">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak_aktif" name="status_keaktifan" value="0" class="custom-control-input" <?php if ($iku8['status_keaktifan'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak_aktif">Tidak</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Akreditasi Internasional</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="akreditasi_internasional" value="<?php echo $iku8['akreditasi_internasional']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lembaga Akreditasi Internasional</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lembaga_akreditasi_internasional" value="<?php echo $iku8['lembaga_akreditasi_internasional']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sertifikat Akreditasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sertif_akreditasi" value="<?php echo $iku8['tautan_sertif_akreditasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku8['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku8['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku8') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>