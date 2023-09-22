<?php
   include "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="Description" content="Enter your description here" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Login</title>
</head>

<body class="bg-light">
   <div style="height: 100vh;">
      <?php
         if(isset($_POST["btn_log_in"]))
         {
            //INPUT
            $username = $_POST["username"];
            $password = $_POST["password"];

            //PROCESS
            login($username, $password);
         }
      ?>
      <div class="row h-100 m-0">
         <div class="card w-25 my-auto mx-auto px-0">
            <div class="card-header text-primary bg-white">
               <h1 class="card-title text-center mb-0">MiniMart Catalog</h1>
            </div>
            <div class="card-body">
               <form action="" method="post">
                  <label for="username" class="small">Username</label>
                  <input type="text" name="username" id="username" class="form-control mb-2" autofocus required>

                  <label for="password" class="small">Password</label>
                  <input type="password" name="password" id="password" class="form-control mb-5">

                  <button type="submit" name="btn_log_in" class="btn btn-primary w-100">Log in</button>
               </form>

               <div class="text-center mt-3">
                  <a href="sign-up.php" class="small">Create Account</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>