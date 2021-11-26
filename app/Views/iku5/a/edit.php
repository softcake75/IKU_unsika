<?php echo view('layout/header') ?>
<?php echo view('layout/navbar') ?>
<?php echo view('layout/sidebar') ?>

<div class="main-content">
  <section class="section">


    <div class="card">
      <div class="card-header">
        <h4>Edit Data Iku 5 (Karya Ilmiah)</h4>
      </div>
      <form action="<?php echo base_url('iku5_a/update/' . $iku5_a['id']); ?>" method="post">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis PT</label>
            <div class="col-sm-12 col-md-7">
              <select name="karya_ilmiah" type="text" class="form-control">
                <option value="Jurnal (Internasional Bereputasi)" <?php if ($iku5_a['karya_ilmiah'] == 'Jurnal (Internasional Bereputasi)') echo 'selected' ?>>Jurnal (Internasional Bereputasi)</option>
                <option value="Jurnal (Internasional)" <?php if ($iku5_a['karya_ilmiah'] == 'Jurnal (Internasional)') echo 'selected' ?>>Jurnal (Internasional)</option>
                <option value="Prosiding (Internasional)" <?php if ($iku5_a['karya_ilmiah'] == 'Prosiding (Internasional)') echo 'selected' ?>>Prosiding (Internasional)</option>
                <option value="Buku ber-ISBN" <?php if ($iku5_a['karya_ilmiah'] == 'Buku ber-ISBN') echo 'selected' ?>>Buku ber-ISBN</option>
                <option value="Jurnal Nasional - Sitasi >10" <?php if ($iku5_a['karya_ilmiah'] == 'Jurnal Nasional - Sitasi >10') echo 'selected' ?>>Jurnal Nasional - Sitasi >10</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?php echo $iku5_a['judul']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penulis</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="penulis" value="<?php echo $iku5_a['penulis']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Afiliasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="afiliasi" value="<?php echo $iku5_a['afiliasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penerbit</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="penerbit" value="<?php echo $iku5_a['penerbit']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quartile</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="quartile" value="<?php echo $iku5_a['quartile']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Scopus</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="link_scopus" value="<?php echo $iku5_a['link_scopus']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Volume</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="volume" value="<?php echo $iku5_a['volume']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nomor" value="<?php echo $iku5_a['nomor']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Jurnal</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_jurnal" value="<?php echo $iku5_a['tautan_jurnal']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Buku</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_buku" value="<?php echo $iku5_a['tautan_buku']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Sertifikat</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_sertifikat" value="<?php echo $iku5_a['tautan_sertifikat']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Tangkapan Layar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_ss" value="<?php echo $iku5_a['tautan_ss']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Sitasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="jml_sitasi" value="<?php echo $iku5_a['jml_sitasi']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Laporan Case Study</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_case_study" value="<?php echo $iku5_a['tautan_case_study']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Laporan Penelitian</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_laporan_penelitian" value="<?php echo $iku5_a['tautan_laporan_penelitian']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautam MoU</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_mou" value="<?php echo $iku5_a['tautan_mou']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Telah Update di Sister</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tautan_update_sister" value="<?php echo $iku5_a['tautan_update_sister']; ?>">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
            <div class="col-sm-12 col-md-7">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="status_validasi" value="1" class="custom-control-input" <?php if ($iku5_a['status_validasi'] == '1') echo 'checked' ?>>
                <label class="custom-control-label" for="ya">Ya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status_validasi" value="0" class="custom-control-input" <?php if ($iku5_a['status_validasi'] == '0') echo 'checked' ?>>
                <label class="custom-control-label" for="tidak">Tidak</label>
              </div>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <a href="<?= base_url('iku5_a') ?>" class="btn btn-danger">Back</a>
            </div>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>




<?php echo view('layout/footer') ?>