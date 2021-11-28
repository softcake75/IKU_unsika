<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 5 (Karya Terapan)</h4>
      </div>
      <form action="<?php echo base_url('iku5_b/update/' . $iku5_b['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Karya</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jenis_karya" value="<?php echo $iku5_b['jenis_karya']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?php echo $iku5_b['judul']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Inventor</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="inventor" value="<?php echo $iku5_b['inventor']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Penghargaan Internasional</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_penghargaan_internasional" value="<?php echo $iku5_b['tautan_penghargaan_internasional']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Hak Paten</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="no_hak_paten" value="<?php echo $iku5_b['no_hak_paten']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan" value="<?php echo $iku5_b['tautan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sertifikat Asosiasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sertif_asosiasi" value="<?php echo $iku5_b['tautan_sertif_asosiasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan MoU</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_mou" value="<?php echo $iku5_b['tautan_mou']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Telah Update di Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_update_sister" value="<?php echo $iku5_b['tautan_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku5_b['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku5_b['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku5_b') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>