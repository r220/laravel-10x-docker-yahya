<?php

require_once 'functions.php';
require_once 'connection2.php';

$q = strtoupper($_GET['q']);
$query_value = "SELECT * from asset_values";

$result_value = pg_query($conn, $query_value);
// pg_fetch_all($result)[0]["asset"];

if (pg_num_rows($result_value) > 0) {
    // output data of each row
    while ($row = pg_fetch_assoc($result_value)) {
        $search = false;
        $asset = $row["asset"];

        if ($q == null) $search = true;
        else if ($q == "") $search = true;
        else if (strpos($asset, $q) !== false) $search = true;


        if ($search === true) {
            $query_color = "SELECT * from asset_colors WHERE asset='$asset'";
            $result_color = pg_query($conn, $query_color);
            if (pg_num_rows($result_color) > 0) {
                echo "<tr id=" . $row["asset"] . ">";
                while ($row_color = pg_fetch_assoc($result_color)) {
                    echo "<td>" . $row["asset"] . "</td>";
                    echo_number($row["1m"], $row_color["1m"]);
                    echo_number($row["2m"], $row_color["2m"]);
                    echo_number($row["3m"], $row_color["3m"]);
                    echo_number($row["5m"], $row_color["5m"]);
                    echo_number($row["10m"], $row_color["10m"]);
                    echo_number($row["15m"], $row_color["15m"]);
                    echo_number($row["30m"], $row_color["30m"]);
                    echo_number($row["45m"], $row_color["45m"]);
                    echo_number($row["1h"], $row_color["1h"]);
                    echo_number($row["2h"], $row_color["2h"]);
                    echo_number($row["3h"], $row_color["3h"]);
                    echo_number($row["4h"], $row_color["4h"]);
                    echo_number($row["1d"], $row_color["1d"]);
                    echo_number($row["1w"], $row_color["1w"]);
                    echo "</tr>";
                }
            }
        }
    }
}
