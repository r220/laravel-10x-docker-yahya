<?php

require_once("connection2.php");

$query_value = "SELECT * from asset_values";
$result_value = pg_query($conn, $query_value);

$asset = strtoupper($_POST["q"]);
$message = "there is no asset here called '" . $asset . "'";
while ($row = pg_fetch_assoc($result_value)) {
    if ($row['asset'] != $asset) continue;
    else {
        $query = "DELETE FROM asset_values WHERE asset = '" . $asset . "'; ";
        $query .= "DELETE FROM asset_colors WHERE asset = '" . $asset . "'; ";
        if (pg_query($conn, $query) == true) {
            $message = "'" . $asset . "' deleted successfully";
            break;
        }
    }
}
echo $message;
