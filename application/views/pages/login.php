<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css_login.css">

<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class = "container">
  <div class="wrapper">
    <form action="<?php echo site_url('loginc/proses_login') ?>" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Login SMK3L PT.INTI</h3>
        <hr class="colorgraph"><br>
        <?= $this->session->flashdata('message'); ?>

        <?php 
        $info = $this->session->flashdata('info');
        if(!empty($info)){
          echo $info;
        }
        ?>
        
        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>          
       
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button><br>
        <div class="text-center">
         <a class="small" href="">Lupa Password?</a>
        </div>       
    </form>     
  </div>
</div>
</body>
</html>