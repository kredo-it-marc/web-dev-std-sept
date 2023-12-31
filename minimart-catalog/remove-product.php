<!-- getProduct(), deleteProduct() -->
<?php
    include "database.php";
    session_start();

    $product_id = $_GET["product_id"];
    $product_details = getProduct($product_id);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Delete Product</title>
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
        if(isset($_POST["btn_delete"]))
        {
            deleteProduct($product_id);
        }
    ?>
    <main class="card w-25 mx-auto border-0 my-5">
        <div class="card-header bg-white border-0">
            <h2 class="card-title text-center text-danger h4 mb-0">Delete Product</h2>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                <p class="fw-bold mb-0">Are you sure you want to delete "<?= $product_details["title"]?>"?</p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="products.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form method="post">
                        <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
    function getProduct($product_id)
    {
        $conn = dbConnect();
        $sql = "SELECT * FROM products WHERE id = $product_id";
        return $conn->query($sql)->fetch_assoc();
    }

    function deleteProduct($product_id)
    {
        $conn = dbConnect();
        $sql = "DELETE FROM products WHERE id = $product_id";

        if($conn->query($sql))
        {
            header("Location:products.php");
        }
        else
        {
            echo "<div class='alert alert-danger w-50 mx-auto text-center my-4'>Failed to delete product. kindly try again. <br><small>".$conn->error."</small></div>";
        }
    }
?>