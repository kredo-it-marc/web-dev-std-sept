<!-- getProducts() -->
<?php
    include "database.php";
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
        include "main-nav.php";
    ?>
    <main class="container py-5">
        <a href="sections.php" class="btn btn-outline-info float-end ms-2"><i class="fas fa-plus-circle"></i> Add New Section</a>
        <a href="add-product.php" class="btn btn-success float-end"><i class="fas fa-plus-circle"></i> Add New Product</a>

        <h2 class="h3 text-muted">Product List</h2>

        <table class="table table-hover mt-4">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>SECTION</th>
                    <th style="width: 95px"></th>   <!-- for the action buttons -->
                </tr>
            </thead>
            <tbody>
                <?php
                    $products = getproducts();

                    if($products && $products->num_rows > 0)
                    {
                        while($row = $products->fetch_assoc())
                        {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["title"]."</td>";
                            echo "<td>".$row["description"]."</td>";
                            echo "<td>".$row["price"]."</td>";
                            echo "<td>".$row["section"]."</td>";
                            echo "<td><a class='btn btn-outline-warning btn-sm me-3' href='edit-product.php?product_id=".$row["id"]."'><i class='fa-solid fa-pen-to-square'></i></a><a class='btn btn-outline-danger btn-sm' href='remove-product.php?product_id=".$row["id"]."'><i class='fa-solid fa-trash'></i></a></td>";
                            echo "</tr>";
                        }
                    }
                    else
                    {
                        echo "<tr><td class='text-center fst-italic text-muted'>No products to display</td></tr>";
                    }
                ?>
            </tbody>
        </table>
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
    function getproducts()
    {
        $conn = dbConnect();
        $sql = "SELECT products.id, products.title, products.description, products.price, sections.title as section FROM products INNER JOIN sections ON products.section_id = sections.id";
        $result = $conn->query($sql);
        return $result;
    }
?>