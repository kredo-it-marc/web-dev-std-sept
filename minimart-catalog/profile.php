<!-- updatePhoto(), getUser() -->
<?php
    include "database.php";
    session_start();
    
    $user_details = getUser($_SESSION["user_id"]);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
        include "main-nav.php";
    ?>
    <?php
        if( isset($_POST["btn_upload_photo"]) )
        {
            //INPUT
            $filename = $_FILES["photo"]["name"];
            $temp_loc = $_FILES["photo"]["tmp_name"];

            //PROCESS
            uploadPhoto($_SESSION["user_id"], $filename, $temp_loc);
        }
    
    ?>
    <main class="container py-5">
        <div class="card w-25 mx-auto">
            <?php
                if($user_details["photo"] == NULL)
                {
            ?>
                   <!-- display default photo -->
                   <img src="assets/images/default.jpeg" alt="photo" class="card-img-top"> 
            <?php
                }
                else
                {
            ?>
                    <!-- display profile picture -->
                    <img src="assets/images/<?= $user_details["photo"] ?>" alt="photo" class="card-img-top"> 
            <?php        
                }
            ?>
            
            <div class="card-body">
                <h1 class='h4'><?= $user_details["first_name"]." ".$user_details["last_name"] ?></h1>
                <h2 class="h6 text-muted"><?= $user_details["username"] ?></h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-2">
                        <input type="file" name="photo" class="form-control" aria-label="Choose Photo">
                        <button type="submit" class="btn btn-outline-secondary" name="btn_upload_photo">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>

</html>
<?php
    function getUser($user_id)
    {
        $conn = dbConnect();
        $sql = "SELECT * FROM users WHERE id = $user_id";
        return $conn->query($sql)->fetch_assoc();
    }

    function uploadPhoto($user_id, $filename, $temp_loc)
    {
        $conn = dbConnect();
        $sql = "UPDATE users SET photo = '$filename' WHERE id = $user_id";

        if($conn->query($sql))
        {
            $destination = "assets/images/".$filename;
            move_uploaded_file($temp_loc,$destination);
            header("refresh:0");
        }
        else
        {
            // display an error message
            echo "<div class='alert alert-danger w-50 mx-auto my-4 text-center'>An error occured. Failed to update photo. <br><small>".$conn->error."</small></div>";
        }
    }
?>