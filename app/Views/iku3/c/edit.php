<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>


        <div class="col-12">
            <div class="card">
                  <div class="card-header">
                    <h4>Edit Table Iku 3 (Berkegiatan Tridharma di PT Lain)</h4>
                  </div>
                <form action="<?php echo base_url('iku3_b/update/'.$iku_3_b['id']); ?>" method="post">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis PT</label>
                      <div class="col-sm-12 col-md-7">
                        <input name="jenis_pt" type="text"class="form-control" value="<?php echo $iku_3_b['jenis_pt']; ?>">
                        <option  value="PT Dalam Negeri">PT Dalam Negeri</option>
                          <option  value="QS100 by Subject">QS100 by Subject</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kegiatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input name="jenis_kegiatan" type="text"class="form-control" value="<?php echo $iku_3_b['jenis_kegiatan']; ?>">
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Penelitian">Penelitian</option>
                            <option value="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama" value="<?php echo $iku_3_b['nama']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kegiatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $iku_3_b['nama_kegiatan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Kegiatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tempat_kegiatan" value="<?php echo $iku_3_b['tempat_kegiatan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun Kegiatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tahun_kegiatan" value="<?php echo $iku_3_b['tahun_kegiatan']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Data Dukung</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tautan_data_dukung" value="<?php echo $iku_3_b['tautan_data_dukung']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Kontrak/Surat Keputusan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tautan_sk" value="<?php echo $iku_3_b['tautan_sk']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Update Sister</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="bukti_update_sister" value="<?php echo $iku_3_b['bukti_update_sister']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan Bukti Isian di PDDIKTI</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="tautan_bukti_pddikti" value="<?php echo $iku_3_b['tautan_bukti_pddikti']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Validasi</label>
                      <div class="col-sm-12 col-md-7">
                        <input name="status_validasi" type="text"class="form-control" value="<?php echo $iku_3_b['status_validasi']; ?>">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?= base_url('iku1')?>" class="btn btn-danger">Back</a>
                      </div>
                    </div>
                  </div>
                </form>  
            </div>
        </div>




<?php echo view('layout/footer')?>