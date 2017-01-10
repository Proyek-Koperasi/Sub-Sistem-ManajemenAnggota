<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Detail 
        <small>Data Anggota</small> -> <small>Mengubah Data Anggota ke Supplier</small>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
        <?php
            foreach ($views as $Array ) {   
            //print_r($Array);
        ?>
          <form action="<?=base_url();?>index.php/c_admin/AnggotaKeSupplier/" enctype="multipart/form-data" method="post">
            <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No KTP</label>
                  <div class="col-sm-7">
                    <input type="text" name="NoKTP" class="form-control" value="<?=$Array['noKtp_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-7">
                    <input type="text" name="Nama" class="form-control" value="<?=$Array['nama_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" name="tempat" class="form-control" value="<?=$Array['tempat_lahir_ang']?>">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="tgl" value="<?=$Array['tgl_lahir_ang']?>" class="form-control">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <input type="text" name="JenisKelamin" value="<?=$Array['jk_ang']?>" class="form-control">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Lengkap</label>
                  <div class="col-sm-3">
                    <input type="text" name="alamat" class="form-control" value="<?=$Array['alamat_ang']?>">
                    <input type="hidden" name="IdProvinsi" class="form-control" value="<?=$Array['IdProvinsi']?>">
                    <input type="hidden" name="IdKota" class="form-control" value="<?=$Array['IdKota']?>">
                    </div>
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No Handphone / Telepon</label>
                  <div class="col-sm-7">
                    <input type="text" name="NoHp" class="form-control" value="<?=$Array['telp_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-7">
                    <input type="text" name="pekerjaan" class="form-control" value="<?=$Array['pekerjaan_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Kantor / Kerja</label>
                  <div class="col-sm-7">
                    <input type="text" name="alamatKerja" class="form-control" value="<?=$Array['alamatkerja_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat Email</label>
                  <div class="col-sm-7">
                    <input type="email" name="AlamatEmail" class="form-control" value="<?=$Array['email_ang']?>">
                    <input type="hidden" name="username" class="form-control" value="<?=$Array['user_ang']?>">
                    <input type="hidden" name="password" class="form-control" value="<?=$Array['password_ang']?>">
                    <input type="hidden" name="foto" class="form-control" value="<?=$Array['pas_foto_ang']?>">
                    <input type="hidden" name="ktp" class="form-control" value="<?=$Array['ktp_ang']?>">
                  </div>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pendaftaraan</label>
                  <div class="col-sm-7">
                    <input type="text" name="tgldaftar" value="<?php echo date("Y-m-d");?>" class="form-control" readonly>
                  </div>
                </div>
              </div>
             </div>             
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-9 control-label">Menambah Data Anggota Menjadi Data Supplier?</label>
                </div>
              </div>
             </div>
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <input type="submit" value="Iya" class="btn btn-primary btn-block btn-flat">
                  </div>
                  <div class="col-sm-2">
                    <input type="button" onClick="window.location.href='<?=base_url();?>'" value="Tidak" class="btn btn-danger btn-block btn-flat">
                  </div>
                </div>
              </div>
             </div>
            </form>
            <?php } ?>
        </section>   
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>