<?php 


SESSION_START();

include "koneksi.php";


$err  = "";
$email = "";
$ingataku = "";

if(isset($_SESSION['session_email'])){
  $cookie_email = $_COOKIE['cookie_emai'];
  $cookie_password = $_COOKIE['cookie_password'];

  $sql = "select * from users where email = '$cookie_email'";
  $q = mysqli_query($koneksi, $sql);
  $r1 = mysqli_fetch_array($q);

  if($r1['password'] == $cookie_password){
    $_SESSION['session_emai'] = $cookie_email;
    $_SESSION['session_password'] = $cookie_password;
  }
}

if(isset($_SESSION['session_email'])){
  header("location:index.php");
  exit;
}

if(isset($_POST['login'])){
 $email=$_POST['email'];
 $password=$_POST['password'];
 $ingataku=$_POST['ingataku'];

 if($email == '' or $password == ''){
  $err .= "<l1> masukan user name dan password dengan benar</li";
 }else{
    $sql ="select * from users where email = '$email'";
    $q1 = mysqli_query($koneksi,$sql);
    $r1 = mysqli_fetch_array($q1);

    if($r1['email'] == ''){
      $err .="<li> emaail <b>$email</b> tidak tersedia</li>";
    }elseif($r1['password'] != $password){
      $err .="<l1>password <b>$password</b> tidak tersedia</li>";
    } 

    if(empty($err)){
      $SESSION['session_email'] = $email;
      $SESSION['session_pasword'] = $password;

      if($ingataku == 1) {
        $cookie_name = "cookie_email";
        $cookie_value = $email;
        $cookie_time = time() + 60 * 60 * 24 * 30;
        setcookie($cookie_name,$cookie_value,$cookie_time,"/");


        $cookie_name = "cookie_password";
        $cookie_value = md5($password);
        $cookie_time = time () + 60 * 60 * 24 * 30;
        setcookie($cookie_name,$cookie_value,$cookie_time,"/");
        
      }
      header("location:index.php");
    }

  

 
  }   

}




?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <style>
        .container{
            width:30%;
            margin-top: 9%;
            box-shadow: 0px 3px 20px rgba(0,0,0,0.3);
            padding:40px;
        }
    </style>
  </head>
  <body>
    <div class="container ">
      
      <h1 class="text-center">LOGIN</h1>
      <div style="padding-top:30px" class="pannel-body">
        <?php if($err){ ?>
          <div id ="login-alert" class="elert alert-denger col-sm-12">
            <ul><?php echo $err ?></ul</div>
            
            <?php } ?>
            
            
            
          </div>
          
          <form method = "post">

      <div class="col mb-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $email ?>">
        </div>
      </div>
      <div class="col mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" name="password">
        </div>
      </div>
      <div class="row mb-3">
        <div class="row-sm-10 offset-sm-1">
          <div class="checkbox">
            <label class="form-check-label" for="gridCheck1" >
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="ingataku" value="1" <?php if($ingataku == '1') echo "checked"?>>
              Remember Me?
            </label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
    </div>
    
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>