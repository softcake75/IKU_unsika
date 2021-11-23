<?php echo view('layout/header')?>
<?php echo view('layout/navbar')?>
<?php echo view('layout/sidebar')?>


        <div class="col-12">
            <div class="card">
                  <div class="card-header">
                    <h4>Edit Table Iku 2 (Prestasi)</h4>
                  </div>
                <form action="<?php echo base_url('iku2_b/update/'.$iku_2_b['id']); ?>" method="post">
                  <div class="card-body">
                    <!-- <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input name="jenis" type="text"class="form-control" value="<?php echo $iku_2_b['jenis']; ?>">
                        <option  value="Pertukaran Pelajar">Pertukaran Pelajar</option>
                          <option  value="Magang Atau Praktik Kerja">Magang Atau Praktik Kerja</option>
                          <option  value="Proyek Desa">Proyek Desa</option>
                          <option  value="Mengajar di Sekolah">Mengajar di Sekolah</option>
                          <option  value="Penelitian atau Riset">Penelitian atau Riset</option>
                          <option  value="Kegiatan Wirausaha">Kegiatan Wirausaha</option>
                          <option  value="Studi Atau Proyek Independen">Studi Atau Proyek Independen</option>
                          <option  value="Proyek Kemanusiaan">Proyek Kemanusiaan</option>
                        </select>
                      </div>
                    </div> -->
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