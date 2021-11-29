<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>


<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Table Iku 2 (Prestasi)</h4>
      </div>
      <form action="<?php echo base_url('iku2_b/update/' . $iku_2_b['id']); ?>" method="post">
        <div class="card-body">
         
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku_2_b['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIM</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nim" value="<?php echo $iku_2_b['nim']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku_2_b['prodi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="fakultas" value="<?php echo $iku_2_b['fakultas']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kompetisi/Lomba</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_lomba" value="<?php echo $iku_2_b['nama_lomba']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tingkat Kompetisi/Lomba</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tingkat_lomba" value="<?php echo $iku_2_b['tingkat_lomba']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penyelenggara</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="penyelenggara" value="<?php echo $iku_2_b['penyelenggara']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prestasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prestasi" value="<?php echo $iku_2_b['prestasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dosen Pembimbing</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="dospem" value="<?php echo $iku_2_b['dospem']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sk Dospem</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="sk_dospem" value="<?php echo $iku_2_b['sk_dospem']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sertifikat/Piagam/Bukti Prestasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sertif" value="<?php echo $iku_2_b['tautan_sertif']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Isian di PDDIKTI</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_pddikti" value="<?php echo $iku_2_b['bukti_pddikti']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku_2_b['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku_2_b['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku2_b') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>