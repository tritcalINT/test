<?php

$delete_id = $_GET['id'];


include_once '../../conn.php';



if ($delete_id != '') {

    $sql_delete = "UPDATE brands SET status = '0' WHERE id = '" . $delete_id . "'";

    if (mysqli_query($conn, $sql_delete)) {
        echo "1";
    }
}

header('Location: ../brand_list.php');
?>