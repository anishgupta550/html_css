<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <table class="table table-hover table-bordered table-white text-capitalize text-center">
        <thead>
            <tr>
                <td>s no</td>
                <td>image</td>
                <td>price</td>
                <td>decscription</td>
                <td>update</td>
                <td>delete</td>

            </tr>
        </thead>
        <?php
        include "db.php"; // database configuration
        /* Calculate Offset Code */
        $limit = 4;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            // next page
            $page = 1;
        }
        $offset = ($page - 1) * $limit;
        /* select query of user table with offset and limit */
        $sql = "SELECT * FROM `pro` ORDER BY id DESC LIMIT {$offset},{$limit}";


        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <?php
            $num = 1;
            while ($row = mysqli_fetch_array($result)) {


            ?>
                <tbody>
                    <tr>
                        <td><?php echo $num ?></td>
                        <td><img src="<?php echo $row['image'] ?>" height="200px" width="200px" alt=""></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['dec'] ?></td>
                        <td><a href="update.php?id=?<php echo $row['id'];  ?>">
                                update</a></td>
                        <td><a href="delete.php?id=?<php echo $row['id'];  ?>">
                                delete</a></td>

                    </tr>
                <?php
                $num++;
            }   ?>
            <?php
        } else {
            echo "<h3>No Results Found.</h3>";
        }
        // show pagination
        $sql1 = "SELECT * FROM pro";
        $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

        if (mysqli_num_rows($result1) > 0) {

            $total_records = mysqli_num_rows($result1);

            $total_page = ceil($total_records / $limit); // (10 /5)

            echo '<ul class="pagination ">';
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="select.php?page=' . ($page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    $active = "active";
                } else {
                    $active = "";
                }
                echo '<li class="page-item' . $active . '"><a class="page-link"  href="select.php?page=' . $i . '">' . $i . '</a></li>';
            }
            if ($total_page > $page) {
                echo '<li class="page-item"><a class="page-link" href="select.php?page=' . ($page + 1) . '">Next</a></li>';
            }

            echo '</ul>';
        }
            ?>

                </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>