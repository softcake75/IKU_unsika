<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 6 (Kemitraan Program Studi)</h4>
      </div>
      <form action="<?php echo base_url('iku6/update/' . $iku6['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku6['prodi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenjang Studi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jenjang" value="<?php echo $iku6['jenjang']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="fakultas" value="<?php echo $iku6['fakultas']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Keaktifan</label><br>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="aktif" name="status_keaktifan" value="1" class="custom-control-input" <?php if ($iku6['status_keaktifan'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="aktif">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak_aktif" name="status_keaktifan" value="0" class="custom-control-input" <?php if ($iku6['status_keaktifan'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak_aktif">Tidak</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bentuk Kerjasama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bentuk_kerjasama" value="<?php echo $iku6['bentuk_kerjasama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kriteria Mitra</label>
            <div class="col-sm-12 col-md-7">
              <select name="kriteria_mitra" type="text" class="form-control">
                <option value="Perusahaan Multinasional" <?php if ($iku6['kriteria_mitra'] == 'Perusahaan Multinasional') echo 'selected' ?>>Perusahaan Multinasional</option>
                <option value="Perusahaan Nasional Berstandar Tinggi" <?php if ($iku6['kriteria_mitra'] == 'Perusahaan Nasional Berstandar Tinggi') echo 'selected' ?>>Perusahaan Nasional Berstandar Tinggi</option>
                <option value="Perusahaan Teknologi Global" <?php if ($iku6['kriteria_mitra'] == 'Perusahaan Teknologi Global') echo 'selected' ?>>Perusahaan Teknologi Global</option>
                <option value="Perusahaan Rintisan (Startup Company) Teknologi" <?php if ($iku6['kriteria_mitra'] == 'Perusahaan Rintisan (Startup Company) Teknologi') echo 'selected' ?>>Perusahaan Rintisan (Startup Company) Teknologi</option>
                <option value="Organisasi Nirlaba Kelas Dunia" <?php if ($iku6['kriteria_mitra'] == 'Organisasi Nirlaba Kelas Dunia') echo 'selected' ?>>Organisasi Nirlaba Kelas Dunia</option>
                <option value="Institusi/Organisasi Multilateral" <?php if ($iku6['kriteria_mitra'] == 'Institusi/Organisasi Multilateral') echo 'selected' ?>>Institusi/Organisasi Multilateral</option>
                <option value="Perguruan Tinggi QS100 by Subject" <?php if ($iku6['kriteria_mitra'] == 'Perguruan Tinggi QS100 by Subject') echo 'selected' ?>>Perguruan Tinggi QS100 by Subject</option>
                <option value="Instansi Pemerintah, BUMN, dan/atau BUMD" <?php if ($iku6['kriteria_mitra'] == 'Instansi Pemerintah, BUMN, dan/atau BUMD') echo 'selected' ?>>Instansi Pemerintah, BUMN, dan/atau BUMD</option>
                <option value="Rumah Sakit" <?php if ($iku6['kriteria_mitra'] == 'Rumah Sakit') echo 'selected' ?>>Rumah Sakit</option>
                <option value="UMKM" <?php if ($iku6['kriteria_mitra'] == 'UMKM') echo 'selected' ?>>UMKM</option>
                <option value="Lembaga Riset Pemerintah, Swasta, Nasional, maupun Internasional" <?php if ($iku6['kriteria_mitra'] == 'Lembaga Riset Pemerintah, Swasta, Nasional, maupun Internasional') echo 'selected' ?>>Lembaga Riset Pemerintah, Swasta, Nasional, maupun Internasional</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Mitra</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_mitra" value="<?php echo $iku6['nama_mitra']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kegiatan Kerjasama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kegiatan_kerjasama" value="<?php echo $iku6['kegiatan_kerjasama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Periode Kerjasama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="periode" value="<?php echo $iku6['periode']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan MoU</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="mou" value="<?php echo $iku6['mou']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan MoA</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="moa" value="<?php echo $iku6['moa']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan IA</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="ia" value="<?php echo $iku6['ia']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Luaran Kerjasama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jenis_luaran" value="<?php echo $iku6['jenis_luaran']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Luaran Kerjasama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jumlah_luaran" value="<?php echo $iku6['jumlah_luaran']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku6['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku6['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku6') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>