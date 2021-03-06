<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        List 
        <small>Data Supplier</small> | <small><a href="<?php base_url() ?>daftar_supplier">Tambah Data Supplier</a></small>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          
                <form action="" method="">
                      <div class="panel-body">
                      <div class="row control-group">
                            <table id="" class="table table-bordered table-hover table-striped tablesorter">
                            <thead>
                            <div class="modal-body">
                                <tr>
                                <th class="bg-success text-center">No</th>
                                <th class="bg-success text-center">Nama</th>
                                <th class="bg-success text-center">NIP / NIK</th>
                                <th class="bg-success text-center">Alamat</th>                                
                                <th class="bg-success text-center">Telepon / HP</th>                                
                                <th class="bg-success text-center">E-Mail</th>
                                <th colspan="" class="bg-success text-center">Opsi</th>
                                </tr>
                            </div>
                            </thead>
                        
                            <tbody>
                                <?php $no=1; 
                                foreach ($datasupplier as $row){?>
                                <tr>
                                  <td class="text-center"><?php echo $no; ?></td>
                                  <td><?php echo $row->nama_sup; ?></td>
                                  <td><?php echo $row->noKtp_sup; ?></td>
                                  <td><?php echo $row->alamat_sup; ?></td>
                                  <td><?php echo $row->telp_sup; ?></td>
                                  <td><?php echo $row->email_sup; ?></td>
                                  <td class='text-center'>
                                    <div class='btn-group'>
                                      <a href="<?php echo base_url(); ?>c_admin/detail_supplier/<?php echo $row->id_supplier; ?>" class='btn btn-info'>
                                        <i class="fa fa-tasks"></i>
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                   
                </div>
            
        </section>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>