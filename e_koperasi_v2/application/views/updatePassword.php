<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Koperasi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>bootstrap/theme/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	

    <script src="<?=base_url();?>assets/js/chart.js"></script>

	<style type="text/css">
	  ul.tsc_pagination { margin:4px 0; padding:0px; height:100%; overflow:hidden; font:12px 'Tahoma'; list-style-type:none; }
ul.tsc_pagination li { float:left; margin:0px; padding:0px; margin-left:5px; }
 
ul.tsc_pagination li a { color:black; display:block; text-decoration:none; padding:7px 10px 7px 10px; }
 
 
ul.tsc_paginationA li a { color:#FFFFFF; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; }
 
ul.tsc_paginationA01 li a { color:#474747; border:solid 1px #B6B6B6; padding:6px 9px 6px 9px; background:#E6E6E6; background:-moz-linear-gradient(top, #FFFFFF 1px, #F3F3F3 1px, #E6E6E6); background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #FFFFFF), color-stop(0.02, #F3F3F3), color-stop(1, #E6E6E6)); }
ul.tsc_paginationA01 li:hover a,
ul.tsc_paginationA01 li.current a { background:#FFFFFF; }
      </style>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>"><i class="fa fa-home"></i></a>
        </div>
 
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?=base_url();?>index.php/halamananggota/index">Data Diri</a></li>
            <li class="active"><a href="<?=base_url();?>index.php/Welcome/logout">Logout</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>


	<div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<h2>Halaman Anggota</h2>
<h2>Data Diri</h2>
    				   <?php
						foreach ($views as $Array ) {		
						//print_r($Array);			
					
				?>
       <form method="post" action="<?=base_url();?>index.php/Halamananggota/ProsesupdatePassword/<?=$Array['id_anggota']?>" enctype="multipart/form-data">
<table border="0" align="center" class="table responsive">
    <tr>
      <th width="153" rowspan="4" scope="row"><img src="<?=base_url().$Array['pas_foto_ang']?>" class="img-responsive img-thumbnail" />     </th>
    <th width="144" scope="row">No KTP</th>
    <td colspan="2"><input name="NoKTP" type="text" class="form-control" value="<?=$Array['noKtp_ang']?>"  readonly/></td>
    </tr>
    
    <tr>
      <th width="144" scope="row">Nama Lengkap</th>
    <td colspan="2"><input name="Nama" type="text" class="form-control" value="<?=$Array['nama_ang']?>"  readonly/></td>
    </tr>
    <tr>
      <th scope="row"><label for="dtp_input2" class="col-sm-14 control-label">Tempat  Tanggal Lahir</label>
      <td width="201"><input name="tempat" type="text" class="form-control" value="<?=$Array['tempat_lahir_ang']?>" readonly/></td>
    <td width="144">
    <input name="tgl" type="text" class="form-control" value="<?=$Array['tgl_lahir_ang']?>" readonly/></td> 
   </tr>
    
  <tr>
    <th scope="row">Jenis Kelamin</th>
    <td colspan="2"><input name="jk" type="text" class="form-control" value="<?=$Array['jk_ang']?>" readonly/></td></tr>
    <tr>
      <th width="153" rowspan="9" scope="row"></th>
      <th scope="row">Alamat Lengkap</th>
    <td colspan="2"><input name="alamat" type="text" maxlength="75" class="form-control" value="<?=$Array['alamat_ang']?>" readonly/></td>
    </tr>
     <tr>
       <th scope="row">No Hp </th>
    <td colspan="2"><input name="NoHp" type="text" maxlength="12" class="form-control" value="<?=$Array['telp_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Pekerjaan</th>
    <td colspan="2"><input name="pekerjaan" type="text" maxlength="35" class="form-control" value="<?=$Array['pekerjaan_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Kantor / Kerja</th>
    <td colspan="2"><input name="alamatKerja" type="text" maxlength="12" class="form-control" value="<?=$Array['alamatkerja_ang']?>" readonly/></td>
    </tr> 
    <tr>
      <th scope="row">Username</th>
    <td colspan="2"><input name="username" type="username" class="form-control" value="<?=$Array['user_ang']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Alamat Email</th>
    <td colspan="2"><input name="AlamatEmail" type="email" class="form-control" value="<?=$Array['email_ang']?>" readonly/></td>
    </tr>
   <tr>
     <th scope="row">Password</th>
    <td colspan="2"><input name="password" type="text" class="form-control" value="<?=$Array['password_ang']?>"/></td>
    </tr>
    <tr>
      <th scope="row">Level</th>
      <td colspan="2"><input name="password" type="text" class="form-control" value="<?=$Array['level']?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pendaftaraan </th>
     <td colspan="2"><input name="tgldaftar" type="text" class="form-control" value="<?=$Array['tgl_daftar']?>" placeholder="" readonly/></td></tr>
    <tr>
      <th scope="row"><div align="right"><input type="submit" value="Change Password" class="btn btn-lg btn-success">
      </div></th>
  <input name="foto" type="hidden" class="form-control" value="<?=$Array['pas_foto_ang']?>" placeholder="" readonly/>
 <input name="ktp" type="hidden" class="form-control" value="<?=$Array['ktp_ang']?>" placeholder="" readonly/>
    </tr>

       <?php
											}
										?>
</table><!-- /hello -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
     
   <script type="text/javascript" src="<?=base_url();?>assets/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
</body>
</html>
