<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          
                <!-- Welcome -->
                <section class="content-header">
                  <h4>
                    Detail 
                    <small>Data Pegawai</small>
                  </h4>
                </section>
                
                <!--end  Welcome -->
                <div class="col-lg-10 connectedSortable">
                    
                        </i>	    				 <?php
						foreach ($views as $Array ) {		
						//print_r($Array);			
					
				?>
<table border="0" align="center" class="table responsive">
    <tr>
      <th width="153" rowspan="4" scope="row"><img src="<?=base_url().$Array['pas_foto_peg']?>" class="img-responsive img-thumbnail" />     </th>
    <th width="144" scope="row">No KTP</th>
    <td colspan="2"><input name="NoKTP" type="text" class="form-control" value="<?=$Array['noKtp_peg']?>"  readonly/></td>
    </tr>
    
    <tr>
      <th width="144" scope="row">Nama Lengkap</th>
    <td colspan="2"><input name="" type="text" class="form-control" value="<?=$Array['nama_peg']?>"  readonly/></td>
    </tr>
    <tr>
      <th scope="row"><label for="dtp_input2" class="col-sm-14 control-label">Tempat  Tanggal Lahir</label></th>
      <td width="201"><input name="" type="text" class="form-control" value="<?=$Array['tempat_lahir_peg']?>" readonly/></td>
    <td width="144">
    <input name="" type="text" class="form-control" value="<?=$Array['tgl_lahir_peg']?>" readonly/></td> 
   </tr>
    
  <tr>
    <th scope="row">Jenis Kelamin</th>
    <td colspan="2"><input name="" type="text" class="form-control" value="<?=$Array['jk_peg']?>" readonly/></td></tr>
    <tr>
      <th width="153" scope="row"></th>
      <th scope="row">Alamat Lengkap</th>
    <td colspan="2"><input name="" type="text" maxlength="75" class="form-control" value="<?=$Array['alamat_peg']?>" readonly/></td>
    </tr>
     <tr>
       <th width="153" rowspan="8" scope="row">&nbsp;</th>
       <th scope="row">No Hp </th>
    <td colspan="2"><input name="" type="text" maxlength="12" class="form-control" value="<?=$Array['telp_peg']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Pekerjaan</th>
    <td colspan="2"><input name="" type="text" maxlength="35" class="form-control" value="<?=$Array['pekerjaan_peg']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Kantor / Kerja</th>
    <td colspan="2"><input name="" type="text" maxlength="12" class="form-control" value="<?=$Array['alamatkerja_peg']?>" readonly/></td>
    </tr> 
    <tr>
      <th scope="row">Username</th>
    <td colspan="2"><input name="" type="username" class="form-control" value="<?=$Array['user_peg']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Email</th>
    <td colspan="2"><input name="" type="email" class="form-control" value="<?=$Array['email_peg']?>" readonly/></td>
    </tr>
   <tr>
     <th scope="row">Level</th>
    <td colspan="2"><input name="" type="text" class="form-control" value="<?=$Array['level_peg']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td colspan="2"><input name="" type="text" class="form-control" value="<?=$Array['status_peg']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pendaftaraan </th>
     <td colspan="2"><input name="" type="text" class="form-control" value="<?=$Array['tgl_daftar_peg']?>" placeholder="" readonly/></td></tr>
    <tr>
     <input name="" type="hidden" class="form-control" value="<?=$Array['pas_foto_peg']?>" placeholder="" readonly/>
 <input name="" type="hidden" class="form-control" value="<?=$Array['ktp_peg']?>" placeholder="" readonly/>
      <th scope="row"><div align="right"><input type="button" value="Back" onClick="window.location.href='<?=base_url();?>c_admin/a_view_pegawai'" class="btn btn-lg btn-success">
      </div></th>

    </tr>

       <?php
											}
										?>
</table><!-- /hello --></i><b>
                   
                </div>
            
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>