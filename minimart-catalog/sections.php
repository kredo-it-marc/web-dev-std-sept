<!-- createSection(), getAllSections() -->
<?php
    include "database.php";
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>New Section</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <main class="py-5">
            <?php
                if( isset($_POST["btn_add"]))
                {
                    //INPUT
                    $title = $_POST["title"];

                    //PROCESS
                    createSection($title);
                }
            ?>
            <div class="card w-25 mx-auto mb-5">
                <div class="card-header bg-info text-white">
                    <h2 class="card-title h4 mb-0">Add New Section</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <label for="title" class="form-label small">Title</label>
                        <input type="text" name="title" id="title" class="form-control mb-4" required autofocus>

                        <a href="products.php" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info px-5" name="btn_add">Add</button>
                    </form>
                </div>
            </div>

            <div class="w-25 mx-auto">
                <h2 class="h3 text-muted">Section List</h2>

                <table class="table table-hover mt-4">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>TITLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sections = getSections();

                            if($sections && $sections->num_rows>0)
                            {
                                while($row = $sections->fetch_assoc())
                                {
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td>";
                                    echo "<td>".$row["title"]."</td>";
                                    echo "</tr>";
                                }
                            }
                            else
                            {
                                echo "<tr><td class='text-center fst-italic text-muted'>No Sections to display</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
<?php
    function createSection($title)
    {
        $conn = dbConnect();
        $sql = "INSERT INTO sections(title) VALUES('$title')";

        if($conn->query($sql))
        {
            header("refresh:0"); //reload the page
        }
        else
        {
            // display an error message
            echo "<div class='alert alert-danger w-50 mx-auto text-center'>Failed to insert the data. Kindly try again.</div>";
        }
    }

    function getSections()
    {
        $conn = dbConnect();
        $sql = "SELECT * FROM sections";
        return $conn->query($sql);
    }
?>