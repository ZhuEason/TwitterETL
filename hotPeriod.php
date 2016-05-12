<?php
/**
 * Created by PhpStorm.
 * User: Eason
 * Date: 5/10/16
 * Time: 3:27 PM
 */

include "connectdb.php";

$q = trim($_GET['q']);


$sql = "SELECT * FROM userhotperiod WHERE uid = ".$q;

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();

    $stmt->bind_result($id, $uid, $username, $hothour, $count);
    $stmt->store_result();

    //echo $sql;

    if ($stmt->num_rows == 0) {
        echo "<h2> No Such User Id </h2>";
    } else {
        while ($stmt->fetch())
        {
            //echo
            echo "<table class=\"table .table-striped text-center\">";
            echo "<thead>";
            echo "<tr>";
            echo "<th class=\"text-center col-sm-3\">uid</th>";
            echo "<th class=\"text-center col-sm-3\">username</th>";
            echo "<th class=\"text-center col-sm-3\">hotHour</th>";
            echo "<th class=\"text-center col-sm-3\">Count</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$username</td>";
            echo "<td>$hothour".":00:00"."</td>";
            echo "<td>$count</td>";
        }
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }
} else {
    echo "<script>";
    echo "console.log('error')";
    echo "</script>";
}

    ?>