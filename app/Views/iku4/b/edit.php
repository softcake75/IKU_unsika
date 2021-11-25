<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>


<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Table Iku 4 (Sertifikat Kompetensi/Profesi)</h4>
      </div>
      <form action="<?php echo base_url('iku4_b/update/' . $iku4_b['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Lembaga</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_lembaga" type="text" class="form-control">
                <option value="Lembaga Sertifikasi Profesi (LSP)" <?php if ($iku4_b['jenis_lembaga'] == 'Lembaga Sertifikasi Profesi (LSP)') echo 'selected' ?>>Lembaga Sertifikasi Profesi (LSP)</option>
                <option value="Lembaga Sertifikasi Kompetensi (LSK)" <?php if ($iku4_b['jenis_lembaga'] == 'Lembaga Sertifikasi Kompetensi (LSK)') echo 'selected' ?>>Lembaga Sertifikasi Kompetensi (LSK)</option>
                <option value="Lembaga Sertifikasi Internasional" <?php if ($iku4_b['jenis_lembaga'] == 'Lembaga Sertifikasi Internasional') echo 'selected' ?>>Lembaga Sertifikasi Internasional</option>
                <option value="Sertifikasi Perusahaan Fortune 500" <?php if ($iku4_b['jenis_lembaga'] == 'Sertifikasi Perusahaan Fortune 500') echo 'selected' ?>>Sertifikasi Perusahaan Fortune 500</option>
                <option value="Sertifikasi Perusahaan BUMN" <?php if ($iku4_b['jenis_lembaga'] == 'Sertifikasi Perusahaan BUMN') echo 'selected' ?>>Sertifikasi Perusahaan BUMN</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku4_b['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lembaga Sertifikasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lembaga_sertifikasi" value="<?php echo $iku4_b['lembaga_sertifikasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sertifikasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sertifikat" value="<?php echo $iku4_b['tautan_sertifikat']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Update Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_update_sister" value="<?php echo $iku4_b['bukti_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku4_b['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku4_b['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku4_b') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>