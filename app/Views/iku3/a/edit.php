<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 3</h4>
      </div>
      <form action="<?php echo base_url('iku3_a/update/' . $iku3_a['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis PT</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_pt" type="text" class="form-control">
                <option value="PT Dalam Negeri" <?php if ($iku3_a['jenis_pt'] == 'PT Dalam Negeri') echo 'selected' ?>>PT Dalam Negeri</option>
                <option value="QS100 by Subject" <?php if ($iku3_a['jenis_pt'] == 'QS100 by Subject') echo 'selected' ?>>QS100 by Subject</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_kegiatan" type="text" class="form-control">
                <option value="Pendidikan" <?php if ($iku3_a['jenis_kegiatan'] == 'Pendidikan') echo 'selected' ?>>Pendidikan</option>
                <option value="Penelitian" <?php if ($iku3_a['jenis_kegiatan'] == 'Penelitian') echo 'selected' ?>>Penelitian</option>
                <option value="Pengabdian kepada Masyarakat" <?php if ($iku3_a['jenis_kegiatan'] == 'Pengabdian kepada Masyarakat') echo 'selected' ?>>Pengabdian kepada Masyarakat</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku3_a['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $iku3_a['nama_kegiatan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tempat_kegiatan" value="<?php echo $iku3_a['tempat_kegiatan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tahun_kegiatan" value="<?php echo $iku3_a['tahun_kegiatan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Data Dukung</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_data_dukung" value="<?php echo $iku3_a['tautan_data_dukung']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Kontrak/SK</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sk" value="<?php echo $iku3_a['tautan_sk']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Update Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_update_sister" value="<?php echo $iku3_a['bukti_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti PDDIKTI</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_bukti_pddikti" value="<?php echo $iku3_a['tautan_bukti_pddikti']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku3_a['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku3_a['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku3_a') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>