<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <div class="name">           

               <i class='bx bxs-user' ></i>
          </div>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name" required
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name" required><br>
          <?php }?>

          <label>User Name</label>
          <div class="user-name">
                    <i class='bx bxs-user' ></i>
                    </div>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
          <div class="pass">            

               <i class='bx bxs-lock' ></i>
          </div>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <div class="pass1">

<i class='bx bxs-lock' ></i>
</div>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

                 
                 
               <div class="sin">
                    <button type="submit">Sign Up</button>
               </div>       
          <div class="login">
         <button type="submit"> <a href="index.php"> login </a></button>
          </div>
     </form>
</body>
</html>