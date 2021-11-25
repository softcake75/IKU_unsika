<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>


<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Table Iku 4 (Sertifikat Kompetensi/Profesi)</h4>
      </div>
      <form action="<?php echo base_url('iku4_c/update/' . $iku_4_c['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pengalaman</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_pengalaman" type="text" class="form-control">
                <option value="Perusahaan Multinasional" <?php if ($iku3_a['jenis_pengalaman'] == 'Perusahaan Multinasional') echo 'selected' ?>>Perusahaan Multinasional</option>
                <option value="Perusahaan Swasta Nasional" <?php if ($iku3_a['jenis_pengalaman'] == 'Perusahaan Swasta Nasional') echo 'selected' ?>>Perusahaan Swasta Nasional</option>
                <option value="Perusahaan Teknologi Global" <?php if ($iku3_a['jenis_pengalaman'] == 'Perusahaan Teknologi Global') echo 'selected' ?>>Perusahaan Teknologi Global</option>
                <option value="Perusahaan Rintisan Teknologi" <?php if ($iku3_a['jenis_pengalaman'] == 'Perusahaan Rintisan Teknologi') echo 'selected' ?>>Perusahaan Rintisan Teknologi</option>
                <option value="Organisasi Nirlaba Kelas Dunia" <?php if ($iku3_a['jenis_pengalaman'] == 'Organisasi Nirlaba Kelas Dunia') echo 'selected' ?>>Organisasi Nirlaba Kelas Dunia</option>
                <option value="Institusi/Organisasi Multilateral" <?php if ($iku3_a['jenis_pengalaman'] == 'Institusi/Organisasi Multilateral') echo 'selected' ?>>Institusi/Organisasi Multilateral</option>
                <option value="Lembaga Pemerintah" <?php if ($iku3_a['jenis_pengalaman'] == 'Lembaga Pemerintah') echo 'selected' ?>>Lembaga Pemerintah</option>
                <option value="BUMN/BUMD" <?php if ($iku3_a['jenis_pengalaman'] == 'BUMN/BUMD') echo 'selected' ?>>BUMN/BUMD</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku_4_c['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Instansi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_instansi" value="<?php echo $iku_4_c['nama_instansi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Pengalaman Kerja</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_pengalaman_kerja" value="<?php echo $iku_4_c['tautan_pengalaman_kerja']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Update Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bukti_update_sister" value="<?php echo $iku_4_c['bukti_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku_4_c['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku_4_c['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku4_c') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>