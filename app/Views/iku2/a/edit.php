<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>


<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Table Iku 2 (Pengalaman di Luar Kampus)</h4>
      </div>
      <form action="<?php echo base_url('iku2_a/update/' . $iku_2_a['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <select name="jenis_kegiatan" class="form-control">
                <option value="Pertukaran Pelajar" <?php if ($iku_2_a['jenis_kegiatan'] == 'Pertukaran Pelajar') echo 'selected' ?>>Pertukaran Pelajar</option>
                <option value="Magang Atau Praktik Kerja" <?php if ($iku_2_a['jenis_kegiatan'] == 'Magang Atau Praktik Kerja') echo 'selected' ?>>Magang Atau Praktik Kerja</option>
                <option value="Proyek Desa" <?php if ($iku_2_a['jenis_kegiatan'] == 'Proyek Desa') echo 'selected' ?>>Proyek Desa</option>
                <option value="Mengajar di Sekolah" <?php if ($iku_2_a['jenis_kegiatan'] == 'Mengajar di Sekolah') echo 'selected' ?>>Mengajar di Sekolah</option>
                <option value="Penelitian atau Riset" <?php if ($iku_2_a['jenis_kegiatan'] == 'Penelitian atau Riset') echo 'selected' ?>>Penelitian atau Riset</option>
                <option value="Kegiatan Wirausaha" <?php if ($iku_2_a['jenis_kegiatan'] == 'Kegiatan Wirausaha') echo 'selected' ?>>Kegiatan Wirausaha</option>
                <option value="Studi Atau Proyek Independen" <?php if ($iku_2_a['jenis_kegiatan'] == 'Studi Atau Proyek Independen') echo 'selected' ?>>Studi Atau Proyek Independen</option>
                <option value="Proyek Kemanusiaan" <?php if ($iku_2_a['jenis_kegiatan'] == 'Proyek Kemanusiaan') echo 'selected' ?>>Proyek Kemanusiaan</option>
              </select>

            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $iku_2_a['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIM</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nim" value="<?php echo $iku_2_a['nim']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi" value="<?php echo $iku_2_a['prodi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="fakultas" value="<?php echo $iku_2_a['fakultas']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Program Kegiatan Merdeka Belajar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kegiatan_merdeka_belajar" value="<?php echo $iku_2_a['kegiatan_merdeka_belajar']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah SKS diakui</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="sks_diakui" value="<?php echo $iku_2_a['sks_diakui']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dosen Pembimbing</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="dosen_pembimbing" value="<?php echo $iku_2_a['dosen_pembimbing']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan SK Rektor/ Pejabat PTN</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sk_rektor" value="<?php echo $iku_2_a['tautan_sk_rektor']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan SK Konversi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sk_konversi" value="<?php echo $iku_2_a['tautan_sk_konversi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sk/ Panduan Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_panduan_kegiatan" value="<?php echo $iku_2_a['tautan_panduan_kegiatan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Data Dukung Lainnya</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_data_lainnya" value="<?php echo $iku_2_a['tautan_data_lainnya']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Isian di PDDIKTI</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_bukti_pddikti" value="<?php echo $iku_2_a['tautan_bukti_pddikti']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" class="custom-control-input" <?php if ($iku_2_a['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" class="custom-control-input" <?php if ($iku_2_a['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku2_a') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>