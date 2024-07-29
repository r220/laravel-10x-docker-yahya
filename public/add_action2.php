<?php

require_once("connection2.php");

$asset = strtoupper($_POST["q"]);
if (empty($asset) || $asset == null)
    echo 'No asset has been typed';
else if (strlen($asset) > 3 || strlen($asset) < 3)
    echo 'asset must have 3 characters';
else {
    $already_Stored = false;
    $query_value = "SELECT * from asset_values";
    $result_value = pg_query($conn, $query_value);

    while ($row = pg_fetch_assoc($result_value)) {
        if ($row['asset'] != $asset) {
            continue;
        } else {
            $already_Stored = true;
            echo "'" . $asset . "' is already stored";
            break;
        }
    }
    if ($already_Stored == false) {
        $query = "INSERT INTO asset_values (asset) VALUES ('" . $asset . "'); ";
        $query .= "INSERT INTO asset_colors (asset) VALUES ('" . $asset . "');";
        if (pg_query($conn, $query) == true) {
            echo "'" . $asset . "' added successfully";
        }
    }
}
