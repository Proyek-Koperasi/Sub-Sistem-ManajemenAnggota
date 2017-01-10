<div class="row">

                <?php echo form_open('Halamananggota/proses_update'); ?>

                <div class="col-lg-12">
                  <div class="panel panel-success center-block">
                    <div class="panel-heading">
                      <div class="btn-group">
                        <a href="<?php echo base_url() ?>Halamananggota/lihat_dtanggota" class='btn btn-success'>
                          <span class="panel-title"><i class="fa fa-inbox"><b> Data Anggota</b></i></span>
                        </a>
                      </div>
                    </div>
                    <form action="" method="">
                    
                      <div class="panel-body">
                      <h3 class="panel-title text-center"><i class="fa fa-pencil"><b> Update Data Anggota</b></i></h3>
                      <div class="form-group">
                        <input type="hidden" name="id_anggota" placeholder="ID Anggota" value="<?php echo $dataanggota->id_anggota; ?>" class="form-control" readonly>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Nama Anggota</label>
                          <div class="col-md-8">
                            <input type="text" name="nama_anggota" placeholder="" value="<?php echo $dataanggota->nama_anggota; ?>" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Tempat Lahir Anggota</label>
                          <div class="col-md-8">
                            <input type="text" name="tempat_lahir_ang" placeholder="" value="<?php echo $dataanggota->tempat_lahir_ang; ?>" class="form-control datepicker" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Lahir Anggota</label>
                          <div class="col-md-8">
                            <input type="text" name="tgl_lahir_ang" placeholder="" value="<?php echo $dataanggota->tgl_lahir_ang; ?>" class="form-control datepicker" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Kelamin</label>
                          <div class="col-md-8">
                            <select name="JenisKelamin_ang" class="form-control" required>
                              <option value="<?php echo $dataanggota->JenisKelamin_ang; ?>"><?php echo $dataanggota->JenisKelamin_ang; ?></option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">NIP / NIK Anggota</label>
                          <div class="col-md-8">
                            <input type="text" name="nip_nik_ang" placeholder="Tanggal Surat Masuk" value="<?php echo $dataanggota->nip_nik_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Fakultas</label>
                          <div class="col-md-8">
                            <input type="text" name="fakultas_ang" placeholder="" value="<?php echo $dataanggota->fakultas_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Pangkat / Golongan</label>
                          <div class="col-md-8">
                            <input type="text" name="pangkat_gol_ang" placeholder="" value="<?php echo $dataanggota->pangkat_gol_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                          <div class="col-md-8">
                            <input type="text" name="status_ang" placeholder="" value="<?php echo $dataanggota->status_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Alamat</label>
                          <div class="col-md-8">
                            <input type="text" name="alamat_ang" placeholder="" value="<?php echo $dataanggota->alamat_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Telepon</label>
                          <div class="col-md-8">
                            <input type="text" name="telp_ang" placeholder="" value="<?php echo $dataanggota->telp_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Username</label>
                          <div class="col-md-8">
                            <input type="text" name="username" placeholder="" value="<?php echo $dataanggota->email_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                          <div class="col-md-8">
                            <input type="text" name="email_ang" placeholder="" value="<?php echo $dataanggota->email_ang; ?>" class="form-control" value="">
                          </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                          <div class="col-md-8">
                            <input type="text" name="password_ang" placeholder="" value="<?php echo $dataanggota->password_ang; ?>" class="form-control" value="">
                          </div>
                      </div> -->
                      <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                          <div class="col-md-8">
                            <button type="submit" name="ok" class="btn btn-success">Save Data</button>
                            <a href="<?php echo base_url() ?>Halamananggota/lihat_dtanggota" class="btn btn-success">Back</a>
                          </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <?php echo form_close(); ?>
            </div>