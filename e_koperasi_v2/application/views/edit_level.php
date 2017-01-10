<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Edit 
        <small>Level Anggota</small>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          <form action="<?=base_url();?>index.php/c_admin/ProsesRegister/" enctype="multipart/form-data" method="post">
             <div class="panel-body">
              <div class="row control-group">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-7">
                    <select name="JenisKelamin" class="form-control">
                    <option>- Pilih Level-</option>
                    <option value="Laki Laki">Anggota</option>
                    <option value="Perempuan">Supplier</option>
                  </select>
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
                <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <input type="submit" value="Simpan Data" class="btn btn-primary btn-block btn-flat">
                  </div>
                  <div class="col-sm-2">
                    <input type="button" onClick="window.location.href='<?=base_url();?>/c_admin'" value="Batal" class="btn btn-danger btn-block btn-flat">
                  </div>
                </div>
              </div>
             </div>
            </form>
        </section>   
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>