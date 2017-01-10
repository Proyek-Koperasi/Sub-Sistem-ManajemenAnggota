 <link href="<?=base_url();?>bootstrap/theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="<?=base_url();?>bootstrap/theme/assets/css/style.css" rel="stylesheet" type="text/css" />
 
  <style type="text/css">

        body
        {
            padding-top: 80px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin
        {
            max-width: 500px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #bbb;
            -webkit-border-radius: 10px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox
        {
            margin-bottom:10px;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"]

        {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 4px 20px;
        }
		
    </style>
<div class="panel-heading"><h1></h1></div>
<div class="panel-body">
	<div id="sign" class="container">
        <!-- kosongi index berarti action berada di atas form -->
        <form class="form-signin" method="post" action="<?=base_url()?>index.php/c_admin/ProsesLogin">
        <!-- <?php if($error==1){?>
	<p><div class="alert alert-danger">Your Email / password did not match, or you selected the wrong user type</div></p>
<?php } ?> -->
<?php if(isset($error))echo "<div class='alert alert-danger' role='alert'><i class='fa fa-exclamation-triangle'></i> ".$error."</div>"; ?>

            <h3 class="form-signin-heading">Login Admin</h3>
            <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password" required><br>
         
          	<input class="btn btn-lg btn-success" type="submit" name="signin" value="Sign In">
            
            <input class="btn btn-lg btn-danger " type="button" name="back" value="Cancel" onClick="window.location.href='<?=base_url();?>'">
        </form>
    </div>
