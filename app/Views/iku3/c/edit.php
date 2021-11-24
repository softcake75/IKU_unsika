<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 3</h4>
      </div>
      <form action="<?php echo base_url('iku3_c/update/' . $iku3_c['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku3_c['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Mahasiswa</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $iku3_c['nama_mahasiswa']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kompetisi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_kompetisi" value="<?php echo $iku3_c['nama_kompetisi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tingkat Kompetisi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tingkat_kompetisi" value="<?php echo $iku3_c['tingkat_kompetisi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Data Dukung</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_data_dukung" value="<?php echo $iku3_c['tautan_data_dukung']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Surat Keterangan Mahasiswa Berprestasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sk" value="<?php echo $iku3_c['tautan_sk']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Prestasi Mahasiswa</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_prestasi_mahasiswa" value="<?php echo $iku3_c['bukti_prestasi_mahasiswa']; ?>">
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
              <a href="<?= base_url('iku3_c') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>