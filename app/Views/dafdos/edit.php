<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Edit Data Definisi Operasional</h4>
      </div>
      <form action="<?php echo base_url('dafdos/update/' . $dafdos['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama" value="<?php echo $dafdos['nama']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="ttl" value="" class="form-control datepicker" value="<?php echo $dafdos['ttl']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIDN/NIDK</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nidn" value="<?php echo $dafdos['nidn']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Statsu Kepegawaian</label>
            <div class="col-sm-12 col-md-7">
              <select type="text" class="form-control" name="status_kepegawaian">
                <option value="PNS" <?php if ($dafdos['status_kepegawaian'] == 'PNS') echo 'selected' ?>>PNS</option>
                <option value="Tetap Non PNS" <?php if ($dafdos['status_kepegawaian'] == 'Tetap Non PNS') echo 'selected' ?>>Tetap Non PNS</option>
                <option value="PPPK" <?php if ($dafdos['status_kepegawaian'] == 'PPPK') echo 'selected' ?>>PPPK</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Prodi Mengajar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="prodi_mengajar" value="<?php echo $dafdos['prodi_mengajar']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_keaktifan" value="1" class="custom-control-input" <?php if ($dafdos['status_keaktifan'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_keaktifan" value="0" class="custom-control-input" <?php if ($dafdos['status_keaktifan'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan Terakhir</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $dafdos['pendidikan_terakhir']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="laki_laki" name="jk" class="custom-control-input" value="Laki-laki" <?php if ($dafdos['jk'] == 'Laki-laki') echo 'checked' ?>>
                <label class="custom-control-label" for="laki_laki">Laki-laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="perempuan" name="jk" class="custom-control-input" value="Perempuan" <?php if ($dafdos['jk'] == 'Perempuan') echo 'checked' ?>>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">IPT - Perguruan Tinggi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="pt" value="<?php echo $dafdos['pt']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bidang Ilmu</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="bidang_ilmu" value="<?php echo $dafdos['bidang_ilmu']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jabatan" value="<?php echo $dafdos['jabatan']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kepakaran</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="kepakaran" value="<?php echo $dafdos['kepakaran']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="validasi" value="1" class="custom-control-input" <?php if ($dafdos['validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="validasi" value="0" class="custom-control-input" <?php if ($dafdos['validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('dafdos') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>