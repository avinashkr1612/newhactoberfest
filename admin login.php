<?php
$con = mysqli_connect('localhost', 'root', '','library project');
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>International library</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script src="index.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">International<span class="logo_colour"> library</span></a></h1>
          <h2>online platform for all the book lovers.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href=adminlogin.php>admin login</a></li>
          <li><a href="user login.php">user login</a></li>
        </ul>
      </div>
    </div>
          <form  method="post">
  <<!-- div class="imgcontainer">
  <img src="Manbrown2.png" width="200" height="200" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <label>User Name :</label>
<input type="text" name="username" id="username"/>
<br></br>
<br></br>
<label>Password :</label>
<input type="password" name="password" id="password"/>
<br></br>  
 <input type="button" value="Login" id="submit" name="submit" >
  <div class="container" style="background-color:#f1f1f1">
   <button type="button" class="cancelbtn"><Cancel><a href="index.html">cancel</a></button>
  </div>
       <?php 
            if(isset($_POST['submit'])){
               $count=0;
      $res=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              <?php                      
                }
      else {
              ?>
              <script type="text/javascript">
                window.location="admin dashboard.php"
              </script>
                  <?php
                }
              }
    ?>
</form>
 <p><a href="index.html">Home</a> | <a href="admin login.html">admin kogin</a> | <a href="user login.html">user login</a> 
      <p>Copyright &copy; International library
    </div>
</body>
</html>