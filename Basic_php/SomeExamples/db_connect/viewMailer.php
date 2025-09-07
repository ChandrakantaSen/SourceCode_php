<?php
    include_once('connection/DAO.php');

    $sql = "Select distinct * from phpdb_tbl1";
    $result = mysqli_query($con, $sql);

    echo "<table border='1'><tr><th>Category Name</th><th>Category Number</th></tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo "<tr>";
        echo "<td>".$row['ctg_name']."</td>";
        echo "<td>".$row['ctg_number']."</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($con);
 ?>
