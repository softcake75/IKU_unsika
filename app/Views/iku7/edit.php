<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 7 (Pembelajaran Dalam Kelas)</h4>
      </div>
      <form action="<?php echo base_url('iku7/update/' . $iku7['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mata Kuliah</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku7['nama_matkul']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah SKS</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku7['sks']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku7['prodi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenjang Studi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jenjang" value="<?php echo $iku7['jenjang']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Matakuliah</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_matkul" type="text" class="form-control">
                <option value="Kelas" <?php if ($iku7['jenis_matkul'] == 'Kelas') echo 'selected' ?>>Kelas</option>
                <option value="Lab" <?php if ($iku7['jenis_matkul'] == 'Lab') echo 'selected' ?>>Lab</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pembelajaran</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_pembelajaran" type="text" class="form-control">
                <option value="Case Method" <?php if ($iku7['jenis_pembelajaran'] == 'Case Method') echo 'selected' ?>>Case Method</option>
                <option value="Team Based Project" <?php if ($iku7['jenis_pembelajaran'] == 'Team Based Project') echo 'selected' ?>>Team Based Project</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Formula Penilaian</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="formula_penilaian" value="<?php echo $iku7['formula_penilaian']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan RPS</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_rps" value="<?php echo $iku7['tautan_rps']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Laporan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_laporan" value="<?php echo $iku7['tautan_laporan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti PDDIKTI</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_pddikti" value="<?php echo $iku7['bukti_pddikti']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku7['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku7['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku7') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>