<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   
    <title>Siakad Polijati</title>
    <link rel="icon" type="image/png" href="https://polijati.ac.id/wp-content/uploads/2024/08/Logo-Politeknik-Jatiluhur.png" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo  base_url(); ?>assets/themplate/main/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/themplate/main/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/jquery/jquery.min.js"></script>
    <link href="<?php echo  base_url(); ?>assets/themplate/main/css/main.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div class="login-container container">
      <img class="background-login" src="<?php echo base_url(); ?>assets/Siakad_Polijati_1.png" alt="">
      <div class="section-1">
        <div class="section-1-1">
          <div class="form-element">
            <div class="label-container">
              <label for="username">Username</label>
            </div>
            <input class="form-control" type="text" required="" name="uname_id" id="username">
          </div>
          <div class="form-element">
            <div class="label-container">
              <label for="password">Password</label>
            </div>
            <input class="form-control" type="password" required="" name="pass" id="password">
          </div>
          <div class="form-element">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <!-- <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-info m-r-5"></i> APP Info?</a> </div> -->
          </div>
          <div id="pesan"></div>
          <button style="height: 40px; font-size: 16px; display: flex; justify-content: center; align-items: center" class="btn btn-warning btn-lg btn-block text-uppercase waves-effect waves-light" id="cek" name='cek'>Log In</button>
          <form class="form-horizontal" id="recoverform" action="index.html">
            <div class="form-group mt-3 ">
              <div class="col-xs-12">
                <h3>APP Info</h3>
                <p class="text-muted">Gunakan NPM sebagai Username! </p>
                Gunakan Tanggal Lahir Sebagai Password
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>  
    <!-- <div class="login-box card" style="border: 1px solid blue; display: flex; justify-content: center; align-items: center">
      <div style="border: 1px solid red; width: 100%; min-height: 200px;"></div> -->
      <!-- <div class="card-block" style="border: 1px solid red; width: 100%; height: 100px !important"> -->
      
        <!-- <a href="javascript:void(0)" width="300px" style="margin-top:100px" class="text-center db"><img src="<?php echo base_url(); ?>assets/themplate/assets/images/logo-official.png" alt="" /></a> -->
   
        <!-- <div class="form-group m-t-30">
          <div class="col-xs-5">
            <input class="form-control" type="text" required="" placeholder="Username" name="uname_id" id="username">
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-5">
            <input class="form-control" type="password" required="" placeholder="Password" name="pass" id="password">
          </div>
        </div>

        <div id="pesan"></div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-info m-r-5"></i> APP Info?</a> </div>
          </div>  
        </div>   -->

        <!-- <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button style="height: 40px; font-size: 16px; display: flex; justify-content: center; align-items: center" class="btn btn-warning btn-lg btn-block text-uppercase waves-effect waves-light" id="cek" name='cek'>Log In</button>
          </div>
          <form class="form-horizontal" id="recoverform" action="index.html">
            <div class="form-group mt-3 ">
              <div class="col-xs-12">
                <h3>APP Info</h3>
                <p class="text-muted">Gunakan NPM sebagai Username! </p>
                Gunakan Tanggal Lahir Sebagai Password
              </div>
            </div>
          </form>
        </div> -->
      <!-- </div> -->
    
    <!-- </div> -->
  
</section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
  
    <script>
    $(document).ready(function(){
    $("#cek").click(function(){
        login();

    });
    });

    $(document).keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    login();
                }
            });
    
    function login(){
        var user =  document.getElementById("username").value ;
        var passw =  document.getElementById("password").value ;

          $.post("<?php echo base_url(); ?>welcome/login_proses",{uname_id: user, pass: passw}, function(data,status){
              var obj = JSON.parse(data);
              document.getElementById("pesan").innerHTML = obj.text;
          
              window.setTimeout(function () {
                
                  document.getElementById("pesan").innerHTML = '';

              }, 2000);

              if(obj.kode==1){
                window.location.assign('<?php echo base_url('welcome'); ?>');
              }
            
          });
        }

      

</script>